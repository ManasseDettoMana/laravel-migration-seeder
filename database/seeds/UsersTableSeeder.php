<?php

use Illuminate\Database\Seeder;
use App\Models\Travel;
use Faker\Generator as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        
        for($i = 0; $i < 50; $i++)
        {
            $newTravel = new Travel();
            $newTravel->partenza = $faker->name();
            $newTravel->destinazione = $faker->name();
            $newTravel->data_partenza = $faker->dateTime();
            $newTravel->data_arrivo = $faker->dateTime();
            $newTravel->prezzo = $faker->randomNumber(3, true);
            $newTravel->image_url =$faker->imageUrl(500, 500, 'animals', true, 'cats' );
            $newTravel->save();
        }
    }
}
