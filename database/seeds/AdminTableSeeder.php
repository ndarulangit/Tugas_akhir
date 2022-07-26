<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name'    => 'admin',
            'email'    => 'admin123@gmail.com',
            'password'    => bcrypt('admin123')
    ]);
    }
}
