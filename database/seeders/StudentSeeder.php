<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students=[
            [
                'name'=>'Juan',
                'last_name'=>'Perez',
                'dni'=>123456789,
                'phone'=>38512345,
                'bundle'=>11119999,
                'active'=>true,
                'degree_id'=>1,

            ],
            [
                'name'=>'Juan',
                'last_name'=>'Torres',
                'dni'=>12345678,
                'phone'=>38512346,
                'bundle'=>11119998,
                'active'=>false,
                'degree_id'=>1,

            ],
            [
                'name'=>'Marcela',
                'last_name'=>'Perez',
                'dni'=>12345679,
                'phone'=>3851235,
                'bundle'=>11119799,
                'active'=>true,
                'degree_id'=>2,

            ],
            [
                'name'=>'Pedro',
                'last_name'=>'Paez',
                'dni'=>123456781,
                'phone'=>38512245,
                'bundle'=>10009949,
                'active'=>false,
                'degree_id'=>2,

            ],
            [
                'name'=>'Alicia',
                'last_name'=>'Garcia',
                'dni'=>12345789,
                'phone'=>38552145,
                'bundle'=>10019999,
                'active'=>true,
                'degree_id'=>3,

            ],
            [
                'name'=>'Gabriela',
                'last_name'=>'Lopez',
                'dni'=>123456871,
                'phone'=>385612345,
                'bundle'=>10409999,
                'active'=>false,
                'degree_id'=>3,

            ],
            [
                'name'=>'Alfredo',
                'last_name'=>'Paz',
                'dni'=>123156789,
                'phone'=>385132345,
                'bundle'=>12009999,
                'active'=>true,
                'degree_id'=>4,

            ],
            [
                'name'=>'Santino',
                'last_name'=>'Mujica',
                'dni'=>1234589,
                'phone'=>385145,
                'bundle'=>103409999,
                'active'=>true,
                'degree_id'=>4,

            ],
            [
                'name'=>'Ivan',
                'last_name'=>'Alvarez',
                'dni'=>12345289,
                'phone'=>385123345,
                'bundle'=>30009991,
                'active'=>false,
                'degree_id'=>5,

            ],
            [
                'name'=>'Daniel',
                'last_name'=>'Llanos',
                'dni'=>1234567,
                'phone'=>38512342,
                'bundle'=>10010999,
                'active'=>true,
                'degree_id'=>5,

            ],
            ];

            foreach($students as $student){
                DB::table('students')->insert($student);
            }
    }
}
