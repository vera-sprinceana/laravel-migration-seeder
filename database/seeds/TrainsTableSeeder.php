<?php

use Illuminate\Database\Seeder;
use App\Models\Train;
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
     {
        $train = new Train();
        $train->azienda='Italo';
        $train->stazione_di_partenza='Bologna';
        $train->stazione_di_arrivo='Roma';
        $train->orario_di_partenza= 18.20;
        $train->orario_di_arrivo= 21.45;
        $train->codice_treno=85;
        $train->numero_carrozze=25;
        $train->in_orario='si';
        $train->cancellato='no';


        $train->save();
        }
}
