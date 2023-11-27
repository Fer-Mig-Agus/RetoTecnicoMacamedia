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
                'name'=>'Computer organisation',
                'duration'=>'Quadrimestral',
                'class_hours'=>40,
                'degree_id'=>1,
                'status_id'=>2
            ],
            [
                'name'=>'Computer architecture',
                'duration'=>'Annual',
                'class_hours'=>120,
                'degree_id'=>1,
                'status_id'=>2
            ],
            [
                'name'=>'Advanced speaking',
                'duration'=>'Quadrimestral',
                'class_hours'=>40,
                'degree_id'=>2,
                'status_id'=>2
            ],
            [
                'name'=>'Advanced writting',
                'duration'=>'Annual',
                'class_hours'=>140,
                'degree_id'=>2,
                'status_id'=>2
            ],
            [
                'name'=>'Advanced systems',
                'duration'=>'Quadrimestral',
                'class_hours'=>40,
                'degree_id'=>3,
                'status_id'=>2
            ],
            [
                'name'=>'Advanced systems II',
                'duration'=>'Annual',
                'class_hours'=>40,
                'degree_id'=>3,
                'status_id'=>2
            ],
            [
                'name'=>'The virtual world',
                'duration'=>'Quadrimestral',
                'class_hours'=>40,
                'degree_id'=>4,
                'status_id'=>2
            ],
            [
                'name'=>'The virtual world according to Miguel',
                'duration'=>'Annual',
                'class_hours'=>120,
                'degree_id'=>4,
                'status_id'=>2
            ],
            [
                'name'=>'Types of organisms',
                'duration'=>'Quadrimestral',
                'class_hours'=>40,
                'degree_id'=>5,
                'status_id'=>2
            ],
            [
                'name'=>'Types of viruses',
                'duration'=>'Annual',
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
