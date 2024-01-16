<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // $train = new Train();
        // $train->reference = '123345';
        // $train->azienda = 'Italo';
        // $train->stazione_di_partenza = 'roma';
        // $train->stazione_di_arrivo = 'milano';
        // $train->orario_di_partenza='16:00';
        // $train->orario_di_arrivo='20:00';
        // $train->codice_treno='12344555667';
        // $train->numero_carrozze=5;
        // $train->giorno_partenza='16/01/2024';
        // //salvataggio nel database
        // $train->save();


        //utilizzo faker


        for ($i=0; $i < 50; $i++) { 
         
            $train = new Train();
            $train->reference = $faker->bothify('??#####');
            $train->azienda = $faker->randomElement(['Italo S.p.A.', 'Trenitalia S.p.A.','TRENORD S.r.l.']);
            $train->stazione_di_partenza = $faker->randomElement(['Roma Termini','Roma Trastevere','Roma Aurelia','Roma Tuscolana']);
            $train->stazione_di_arrivo = $faker->randomElement(['Milano Porta Vittoria', 'Milano Porta Centrale','Milano Porta Venezia','Milano Cadorna']);
            $train->orario_di_partenza=$faker->time();
            $train->orario_di_arrivo=$faker->time();
            $train->codice_treno=$faker->bothify('??-####');
            $train->numero_carrozze=$faker->numberBetween(1, 20);
            $train->giorno_partenza=$faker->dateTimeBetween('-1 week', '+1 week');
            //salvataggio nel database
            $train->save();
        }
    }
}
