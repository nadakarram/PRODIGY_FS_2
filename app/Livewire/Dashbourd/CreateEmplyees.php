<?php

namespace App\Livewire\Dashbourd;

use App\Models\employee;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
#[Layout("layouts.login")]
class CreateEmplyees extends Component
{
    use WithFileUploads;
    #[Validate("required|min:2|string")]
    public $name;
    #[Validate("required|email|unique:users")]
    public $email;
    // #[Validate("required|min:6|max:10")]
    // public $password;
    #[Validate("required|min:16|integer")]
    public $age;
    #[Validate("nullable|max:70|string")]
    public $address;
    #[Validate("required|size:11|string")]
    public $phone_number;
    #[Validate("required|string")]
    public $job_feild;
    #[Validate("image|nullable")]
    public $image;
 
    // public $terms;
    public function addemployee(){
        $this->validate();
        // dd();
        $user=employee::create([
            "name"=>$this->name,
            "age"=>$this->age,
            "phone_number"=>$this->phone_number,
            "email"=>$this->email,
            // "password"=>$this->password,
            "address"=>$this->address?? "no address",
            "image"=>$this->image?->store("uplouds/profile","public"),
            "job_feild"=>$this->job_feild

        ]);
        
      
        // dd("2");
      $this->reset();
      $this->dispatch("employee-create");
    //   sayed123
    // samey123


    }

    public function render()
    {
        return view('livewire.dashbourd.create-emplyees');
    }
}
