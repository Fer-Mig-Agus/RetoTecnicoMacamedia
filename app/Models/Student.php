<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table='students';

    protected $fillable=[
        'name',
        'last_name',
        'dni',
        'phone',
        'bundle',
        'active',
        'degree_id',
    ];

    

    protected $appends=[
        'status',
        'student'
    ];

    public function getStatusAttribute(){
        if($this->active){
            return 'Active';
        } else{
            return 'Inactive';
        }
    }

    
    public function getStudentAttribute(){
        return $this->name.' '.$this->last_name;
    }

    public function full_name()
{
    return $this->name . ' ' . $this->last_name;
}

    // Relacion de uno a muchos con Degree
    public function degree(){
        return $this->belongsTo(Degree::class);
    }


    //Relacion de uno a muchos con Historicals
    public function historical()
    {
        return $this->hasMany(Historical::class);
    }





}
