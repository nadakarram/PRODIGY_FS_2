<?php

namespace App\Livewire\Dashbourd;
use App\Models\employee;
use Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
#[Layout("layouts.app")]
class UpdateEmplyees extends Component
{
    use WithFileUploads;
    #[Validate("required|min:2|string")]
    public $name;
    #[Validate("required|email")]
    public $email;
    #[Validate("required|min:6|max:10")]
    public $newpassword;
    #[Validate("required|min:16|integer")]
    public $age;
    #[Validate("required|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;
    #[Validate("required|min:2|string")]
    public $job_feild;
    
    
    public $image;
    #[Validate("image")]
    public $edtedimage;
 
    public $employee;
    public $massage="";
   
    function mount(employee $employee){
        $this->employee=$employee;
        $this->name=$this->employee->name;
        $this->address=$this->employee->address;
        $this->phone_number=$this->employee->phone_number;
        
        $this->age=$this->employee->age;
        $this->email=$this->employee->email;
        $this->image=$this->employee->image;
        $this->job_feild=$this->employee->job_feild;
        // $this->password=$this->employee->password;
      


    }
    function changeimage(){
        $this->validateOnly($this->edtedimage);
        // dd("1");
       $this->employee->update([
            "image"=>$this->edtedimage?->store("uplouds/profile","public"),]);
            $this->massage="image change correctly";
            $this->dispatch("employee-updated");
    }
     function updateEmployeeData(){
        // $this->validate();
        // dd(Hash::make($this->newpassword));
        $this->employee->update([
            "name"=>$this->name,
            "age"=>$this->age,
            "phone_number"=>$this->phone_number,
            "email"=>$this->email,
          
            "address"=>$this->address,
            // "password"=>Hash::make($this->newpassword)
            // "image"=>$this->edtedimage?->store("uplouds/profile","public"),
        ]);
      $this->massage="change correctly";

      $this->dispatch("employee-updated");

      return redirect("/emplyees");
     }

    public function render()
    {
        return view('livewire.dashbourd.update-emplyees');
    }
}
