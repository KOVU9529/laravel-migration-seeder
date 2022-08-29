<?php

use Illuminate\Database\Seeder;
use App\Travel;
use Faker\Generator as Faker;

class TravelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        

       for($i=1; $i<5; $i++){
           $newTravel= new Travel();
           $newTravel->reference = $faker-> randomNumber(5,true);
           $newTravel->city =$faker->city();
           $newTravel->state =$faker->country();
           $newTravel->description =$faker->paragraph(2,true);
           $newTravel->price =$faker->randomFloat(2,100,99999);
          // $newTravel->type= $travelHouseType[rand(0,2)];
          $newTravel-> save();
       }
    }
}
