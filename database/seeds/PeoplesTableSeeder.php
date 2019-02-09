<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\People;
use Carbon\Carbon;
use Faker\Factory as Faker;

class PeoplesTableSeeder extends Seeder
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
        App\People::create([
              'name' =>  $faker->name,
              'info_id' =>  People::all()->random()->id,
              'created_at' =>  Carbon::now(),
              'updated_at' =>  Carbon::now(),
        ]);
    }


}


}
