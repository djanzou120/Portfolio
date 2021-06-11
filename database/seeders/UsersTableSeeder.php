<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'id' => 1,
            'username' => 'admin',
            'firstname' => 'Junior',
            'lastname' => 'DJANZOU',
            'email' => 'junior.djanzou@dsmart.dev',
            'password' => bcrypt('password'),
        ];

        User::insert($data);
    }
}
