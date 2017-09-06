<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
        DB::table('users')->insert([
        'name' => 'Test User',
        'email' => 'test@mail.com',
        'password' => Hash::make('123456'),
        ]);
    }
}
