<?php

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
        \App\Model\User::create([
            'email'    => 'admin@gmail.com',
            'name'     => 'admin',
            'password' => bcrypt('admin123'),
        ]);
    }
}
