<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';

    // Relacion de uno a muchos con Degree
    public function degrees(){
        return $this->belongsTo(Degree::class);
    }


     // Relacion de muchos a muchos con Subject
     public function subjects(){
        return $this->belongsToMany(Subject::class);
    }

    





}
