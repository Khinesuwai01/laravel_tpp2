<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => "KhineSu",
            "email" => "ksw0112@gmail.com",
            "password" => Hash::make("989898")

        ]);
        $admin->assignRole('Admin');

        $editor = User::create([
            'name' => "Gawon",
            "email" => "gawon123@gmail.com",
            "password" => Hash::make("090909")

        ]);
        $editor->assignRole('Editor');
    }
}
