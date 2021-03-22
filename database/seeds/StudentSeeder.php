<?php

use Illuminate\Database\Seeder;
use App\Student;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $student = [
            [
                'name' => 'Elon',
                'surname' => 'Musk',
                'birth_date' => '28/06/1971',
                'birth_place' => 'Pretoria - Sud Africa',
                'residence_address' => 'USA',
                'email' => 'elonmusk@info.com',
                'password' => 'fnSJqwiNJSD()%"/ruyn12894',
            ]
        ];
        $student = [
            [
                'name' => 'Warren',
                'surname' => 'Buffett',
                'birth_date' => '30/08/1930',
                'birth_place' => 'Omaha, Nebraska - USA',
                'residence_address' => 'USA',
                'email' => 'warrenbuffett@info.com',
                'password' => 'fnSJqwiNJSD()%"/ruyn12894',
            ]
        ];
        $student = [
            [
                'name' => 'Jeff',
                'surname' => 'Bezos',
                'birth_date' => '12/01/1964',
                'birth_place' => 'Albuquerque, New Mexico - USA',
                'residence_address' => 'USA',
                'email' => 'jeffbezos@info.com',
                'password' => 'fnSJqwiNJSD()%"/ruyn12894',
            ]
        ];
        $student = [
            [
                'name' => 'Steve',
                'surname' => 'Jobs',
                'birth_date' => '24/02/1955',
                'birth_place' => 'San Francisco, California - USA',
                'residence_address' => 'Paradise',
                'email' => 'stevejobs@info.com',
                'password' => 'fnSJqwiNJSD()%"/ruyn12894',
            ]
        ];
        $student = [
            [
                'name' => 'Alex',
                'surname' => 'Greco',
                'birth_date' => '01/10/1995',
                'birth_place' => 'San Pietroburgo - Russia',
                'residence_address' => 'Italy',
                'email' => 'alexgreco@info.com',
                'password' => 'fnSJqwiNJSD()%"/ruyn12894',
            ]
        ];

        foreach ($students as $student) {
            $newStudent = new Student();
            
            $newStudent->name = $student['name'];
            $newStudent->surname = $student['surname'];
            $newStudent->birth_date = Carbon::createFromFormat('d/m/Y', $student['birth_date']);
            $newStudent->birth_place = $student['birth_place'];
            $newStudent->residence_address = $student['residence_address'];
            $newStudent->email = $student['email'];
            $newStudent->password = $student['password'];

            $newStudent->save();
        };
    }
}
