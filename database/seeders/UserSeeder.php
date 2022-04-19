<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Grace',
                'email'=> 'admin@admin.com',
                'password'=>Hash::make('admin@admin.com'),
                'role_id'=>1
            ],
            [
                'name' => 'Anouck',
                'email'=> 'member@member.com',
                'password'=>Hash::make('member@member.com'),
                'role_id'=>2
            ],
            [
                'name' => 'Alixe',
                'email'=> 'web@web.com',
                'password'=>Hash::make('web@web.com'),
                'role_id'=>3
            ],
            [
                'name' => 'Audrey',
                'email' => 'editor@editor.com',
                'password' => Hash::make('editor@editor.com'),
                'role_id' => 4
            ],
            [
                'name' => 'Adrian',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('admin2@admin.com'),
                'role_id' => 1
            ],
            [
                'name' => 'Aïnhoa',
                'email' => 'admin3@admin.com',
                'password' => Hash::make('admin3@admin.com'),
                'role_id' => 1
            ],
        ]);
    }
}
