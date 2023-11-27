<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Degree extends Model
{
    use HasFactory;

    protected $table='degrees';

    // Relacion de uno a muchos con Student
    public function students(){
        return $this->hasMany(Student::class);
    }

    //Relacion de uno a mucho con Subject
    public function subjects()
    {
        return $this->hasMany(Subject::class,'degree_id');
    }

}
