<?php

namespace App\Livewire\Dashbourd;

use App\Models\employee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;
#[Layout("layouts.app")]
class Emplyees extends Component
{
    use WithPagination;
    public $search;
    #[On("search")]
    #[On("employee-create")]
    #[On("employee-updated")]
    public function handelsearch(string $search =null){
        $this->search=$search;

    }
    public function render()
    {
       
        $employes=employee::where("name","like","%{$this->search}%")->get();
        return view('livewire.dashbourd.emplyees',["employes"=>$employes]);
    }

  
}
