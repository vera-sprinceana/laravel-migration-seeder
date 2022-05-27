<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
     public function index( ){
        $train = Train::where( 'orario_di_partenza', '>=', date("Y/m/d") )->get();
         
     }
    

}
