<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table='subjects';

    // Relacion de muchos a muchos con Student
    public function students(){
        return $this->belongsToMany(Student::class);
    }

    // Relacion de uno a muchos con Status
    public function statuses()
    {
        return $this->belongsTo(Status::class);
    }



}
