<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DegreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $degrees=[
            [
                'name'=>'Lic. Sistemas',
                'duration'=> 5
            ],
            [
                'name'=>'Lic. Ingles',
                'duration'=> 4
            ],
            [
                'name'=>'Tecnico superior en sistemas',
                'duration'=> 3
            ],
            [
                'name'=>'Doctorado. Sistemas',
                'duration'=> 6
            ],
            [
                'name'=>'Lic. Medicina',
                'duration'=> 7
            ]
            ];
        
           foreach($degrees as $degree){
            DB::table('degrees')->insert($degree);
           }
        
    }
}
