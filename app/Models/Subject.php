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

    // // Relacion de muchos a muchos con Student
    // public function students(){
    //     return $this->belongsToMany(Student::class);
    // }

    // // Relacion de uno a muchos con Status
    // public function statuses()
    // {
    //     return $this->belongsTo(Status::class);
    // }

    //Relacion de uno a muchos con Degree
    public function degrees()
    {
        return $this->belongsTo(Degree::class,'degree_id');
    }



}
