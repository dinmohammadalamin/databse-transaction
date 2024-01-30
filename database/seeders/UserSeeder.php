<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name'     => 'amin',
                'email'    => 'amin@gmail.com',
                'password' => Hash::make('12345678'),
                'balance'  => 500
            ],
            [
                'name'     => 'din',
                'email'    => 'din@gmail.com',
                'password' => Hash::make('12345678'),
                'balance'  => 200
            ]
        ];
        foreach ($users as $user){
            User::query()->create($user);
        }

    }
}
