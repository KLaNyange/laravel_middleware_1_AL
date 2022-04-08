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
                'name' => 'firstAdmin',
                'email'=> 'admin@admin.com',
                'password'=>Hash::make('admin@admin.com'),
                'role_id'=>1
            ],
            [
                'name' => 'firstMember',
                'email'=> 'member@member.com',
                'password'=>Hash::make('member@member.com'),
                'role_id'=>2
            ],
            [
                'name' => 'firstWeb',
                'email'=> 'web@web.com',
                'password'=>Hash::make('web@web.com'),
                'role_id'=>3
            ],
        ]);
    }
}
