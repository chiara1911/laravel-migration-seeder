<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for( $i = 0; $i < 10; $i++ ) {

            $newTrain= new Train();
            $newTrain->factory = $faker->company();
            $newTrain->departure_station = $faker->city();
            $newTrain->arrived_station = $faker->city();
            $newTrain->departure_time = $faker->time();
            $newTrain->arrived_time = $faker->time();
            $newTrain->train_code = $faker->randomNumber(6, true);
            $newTrain->carriages = $faker->numberBetween(6, 18);
            $newTrain->in_time= $faker->numberBetween(0,1);
            $newTrain->cancelled= $faker->numberBetween(0,1);
            $newTrain->save();

    }
}
}
