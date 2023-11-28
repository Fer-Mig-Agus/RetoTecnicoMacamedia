<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table='subjects';

    protected $fillable=[
        'name',
        'duration',
        'class_hours',
        'degree_id',
    ];


    //Relacion de uno a muchos con Degree
    public function degree()
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }

     //Relacion de uno a muchos con Historicals
     public function historical()
     {
         return $this->hasMany(Historical::class);
     }
 



}
