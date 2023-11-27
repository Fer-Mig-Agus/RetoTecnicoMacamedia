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
                'name'=>'Lic. Systems',
                'duration'=> 5
            ],
            [
                'name'=>'Lic. English',
                'duration'=> 4
            ],
            [
                'name'=>'Higher systems technician',
                'duration'=> 3
            ],
            [
                'name'=>'Doc. Systems',
                'duration'=> 6
            ],
            [
                'name'=>'Lic. Medicine',
                'duration'=> 7
            ]
            ];
        
           foreach($degrees as $degree){
            DB::table('degrees')->insert($degree);
           }
        
    }
}
