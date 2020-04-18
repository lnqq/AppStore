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
            'name' => 'quangquang',
            'password' => Hash::make('nhatquang'),
            'role' => 1
        ]);
    }
}


//php artisan db:seed