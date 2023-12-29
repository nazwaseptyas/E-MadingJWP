<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $userData = [
        [
            'email'=>'adminjwp@gmail.com',
            'password'=> bcrypt('adminjwp')
        ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}