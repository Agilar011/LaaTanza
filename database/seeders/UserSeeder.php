<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Cari role dengan nama "admin"
        $adminRole = Role::where('name', 'admin')->first();

        // Buat user admin
        $admin = User::create([
            'name' => 'Agilar Gumilar',
            'email' => 'agilar@admin.com',
            'birthdate' => '2002-11-10',
            'birthplace' => 'Malang',
            'phone' => '081232090819',
            'address' => 'Jl Klayatan 3C No 10',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => bcrypt('password'),

        ]);

        // Tautkan user admin dengan role "admin"
        $admin->roles()->attach($adminRole);
    }
}
