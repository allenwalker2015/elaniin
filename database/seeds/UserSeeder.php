<?php

use App\models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'username' => 'tempuser1',
                'email' => 'tempuser1@gmail.com',
                'password' => 'password',
                'name' => 'Temp User 1',
                'birthday' => '1997/12/10',
                'phone' => '78716568'
            ]);
        User::create([
            'username' => 'tempuser2',
            'email' => 'tempuser2@gmail.com',
            'password' => 'password',
            'name' => 'Temp User 2',
            'birthday' => '1998/12/10',
            'phone' => '78716567'
        ]);
        User::create([
                'username' => 'tempuser3',
                'email' => 'tempuser3@gmail.com',
                'password' => 'password',
                'name' => 'Temp User 3',
                'birthday' => '1999/12/10',
                'phone' => '78716566'
            ]
        );
    }
}
