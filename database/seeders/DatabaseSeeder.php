<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Role::create([
            'name'      => 'Admin',
            'slug'      => 'admin',
            'permission' =>  json_encode([])

        ]);
        
        
Admin::create([

'role_id'           => 1,
'name'              => 'super Admin',
'email'             => 'admin@gmail.com',
'cell'              => '01750639637',
'username'          =>  'super',
'password'          =>   Hash::make('asdfghjkl'),



]);



    }
}


