<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $aziende = ['Italo', 'Trenitalia', 'Ferrovie dello Stato', 'Trenord'];

        for ($i = 0; $i < 1000; $i++) {


            $new_train = new Train();
            $new_train->azienda = $faker->randomElement($aziende);
            $new_train->stazione_di_partenza = $faker->city();
            $new_train->stazione_di_arrivo = $faker->city();
            $new_train->orario_di_partenza = $faker->time();
            $new_train->orario_di_arrivo = $faker->time();
            $new_train->codice_treno = $faker->bothify('??-#####');
            $new_train->numero_carrozze = $faker->randomElement([3, 6]);
            $new_train->in_orario = $faker->randomElement([0, 1]);
            $new_train->cancellato = $faker->randomElement([0, 1]);

            $new_train->save();
        }
    }
}
