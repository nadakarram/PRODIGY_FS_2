<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         $this->call(RolesAndPermetionsSeeder::class);
        $employee = User::factory()->create([
            'name' => 'shower',
            'email' => 'shower@google.com',
            'age' => 45,
            "phone_number" => "01223458766",
            "address" => "no address",
            "password" => "show123"


        ]);
        $employee->assignRole( "employee");
        $employeeedit = User::factory()->create([
            'name' => 'edit',
            'email' => 'editor@google.com',
            'age' => 45,
            "phone_number" => "01223458761",
            "address" => "no address",
            "password" => "edit123"


        ]);
        $employeeedit->assignRole( "employeeeditor");
        $superemployee = User::factory()->create([
            'name' => 'super',
            'email' => 'super@google.com',
            'age' => 45,
            "phone_number" => "01223458762",
            "address" => "no address",
            "password" => "super123"


        ]);
        $superemployee->assignRole( "superemployee");
    }
}
