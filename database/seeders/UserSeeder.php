<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Position;
use App\Models\EmployeeList;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             // Create admin user
             User::create([
                'first_name' => 'John',
                'middle_name' => 'Admin',
                'last_name' => 'Doe',
                //'position' => 'admin',
                //'position_id' => 1,
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123')
            ])->assignRole('admin');

            
          $headPosition = Position::create(['description' => 'Head']);
          EmployeeList::create([
            'first_name' => 'Jane',
            'middle_name' => 'ehhh',
            'last_name' => 'Doe',
            'age' => '20',
            'bdate' => 'june 26, 1998',
            'email' => 'head@gmail.com',
            'contnum' => '09269325482',
            'position_id' =>  $headPosition->id, 
            'idnum' => '201901161',
            'dept' => 'BGO',
            'password' => bcrypt('staff123')
        ])->assignRole('Head');
    }
}
