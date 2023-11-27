<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects=[
            [
                'name'=>'Organizacion del computador',
                'duration'=>'cuatrimestral',
                'class_hours'=>40,
                'degree_id'=>1,
                'status_id'=>2
            ],
            [
                'name'=>'Arquitectura del computador',
                'duration'=>'anual',
                'class_hours'=>120,
                'degree_id'=>1,
                'status_id'=>2
            ],
            [
                'name'=>'Speaking all',
                'duration'=>'cuatrimestral',
                'class_hours'=>40,
                'degree_id'=>2,
                'status_id'=>2
            ],
            [
                'name'=>'Writting all',
                'duration'=>'anual',
                'class_hours'=>140,
                'degree_id'=>2,
                'status_id'=>2
            ],
            [
                'name'=>'Sistemas avanzandos',
                'duration'=>'cuatrimestral',
                'class_hours'=>40,
                'degree_id'=>3,
                'status_id'=>2
            ],
            [
                'name'=>'Sistemas avanzandos II',
                'duration'=>'anual',
                'class_hours'=>40,
                'degree_id'=>3,
                'status_id'=>2
            ],
            [
                'name'=>'El mundo virtual',
                'duration'=>'cuatrimestral',
                'class_hours'=>40,
                'degree_id'=>4,
                'status_id'=>2
            ],
            [
                'name'=>'El mundo virtual segun migui',
                'duration'=>'anual',
                'class_hours'=>120,
                'degree_id'=>4,
                'status_id'=>2
            ],
            [
                'name'=>'Tipos de organismos',
                'duration'=>'cuatrimestral',
                'class_hours'=>40,
                'degree_id'=>5,
                'status_id'=>2
            ],
            [
                'name'=>'Tipos de virus',
                'duration'=>'anual',
                'class_hours'=>140,
                'degree_id'=>5,
                'status_id'=>2
            ],
            
            ];

            foreach($subjects as $subject){
                DB::table('subjects')->insert($subject);
            }
        
    }
}
