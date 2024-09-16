<?php

use App\Livewire\Auth\Login;
use App\Livewire\Dashbourd\CreateEmplyees;
use App\Livewire\Dashbourd\DeleteEmplyees;
use App\Livewire\Dashbourd\Emplyees;
use App\Livewire\Dashbourd\UpdateEmplyees;
use App\Models\employee;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {

    Route::get("/logout", function () {
      Auth::logout();
  
      return redirect('/login');
  
    });
  
  
  
  Route::middleware("can:show_employee")->group(function () {
    Route::get("/emplyees", Emplyees::class);
  });
  Route::middleware("can:create_employee")->group(function(){
    Route::get("/addemplyee", CreateEmplyees::class);
   
  });
  Route::middleware("can:update_employee")->group(function(){
  
      Route::get("/updateemployee/{employee}", UpdateEmplyees::class);
  });
  Route::middleware("can:delete_employee")->group(function(){
   
    
    Route::get("/delete/{employee}", DeleteEmplyees::class);  
  });  
      
     

    
     
      
    // });
});
    Route::middleware("guest")->group(function () {
     
      Route::get('/login', Login::class)->name("login");
      Route::get('/', Login::class)->name("home");

  
    });
    
