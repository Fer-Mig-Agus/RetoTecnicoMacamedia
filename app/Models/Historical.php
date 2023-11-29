<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Historical extends Model
{
    use HasFactory;

    protected $table = 'historicals';

    protected $fillable = [
        'date',
        'student_id',
        'subject_id',
        'status_id',
    ];

    
    //Relacion de uno a muchos con Student
    public function student()
    {
        return $this->belongsTo(Student::class);
    }


    //Relacion de uno a muchos con Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    //Relacion de uno a muchos con Status
    public function status()
    {
        return $this->belongsTo(Status::class);
    }












}
