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
         DB::table('users')->insert([
            'name' => 'Fukusokuhonbu',
             'company' => 'フクソク',
              'authority' => 1,
            'email' => 'fukusokuhonbu0918@gmail.com',
            'password' => komedaPJ0918('password'),
        ]);
    }
}
