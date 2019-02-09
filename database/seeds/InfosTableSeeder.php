<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Info;
use Carbon\Carbon;
use Faker\Factory as Faker;

class InfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
    $faker = Faker::create();

    for($i = 0; $i < 500; $i++) {
        App\Info::create([
            'date_of_birth' =>$faker->dateTimeBetween($startDate = '-40 years', $endDate = 'now', $timezone = null),
            'gender' =>  $faker->randomElement(['male' ,'female']),
          'hobby' => $faker->randomElement(['football','hockey','curling','snowboarding','skiing','fishing','cycling','baseball','basketball']),
           'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }

 
    }
}
