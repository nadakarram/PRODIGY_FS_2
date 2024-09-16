<?php

namespace App\Livewire\Dashbourd;
use App\Models\employee;
use Livewire\Attributes\Layout;
use Livewire\Component;
#[Layout("layouts.app")]
class DeleteEmplyees extends Component
{ public $employee;
    public $id;
    public function mount(employee $employee){
        $this->employee=$employee;
        $this->id=$employee->id;

    }
    public function delete(){
        employee::findOrFail($this->id)->delete();
        return redirect("/emplyees");

    }
    public function render()
    {
        $this->delete();
        return view('livewire.dashbourd.delete-emplyees');
    }
}
