<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
      for ($i=0; $i < 3; $i++) {
        DB::table('tasks')->insert([
        'name' => $faker->realText($maxNbChars = 20, $indexSize = 2),
        'description' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        ]);
      }
    }
}
