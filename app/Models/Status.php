<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    protected $table='statuses';


     //Relacion de uno a muchos con Historicals
     public function historical()
     {
         return $this->hasMany(Historical::class);
     }

     
}
