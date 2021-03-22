<?php

use Illuminate\Database\Seeder;
use App\Student;
// use Carbon\Carbon;
use Faker\Generator as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ( $i=0; $i<100; $i++ ){ 
            $newStudent = new Student();

            $newStudent->name = $faker->firstName('male');
            $newStudent->surname = $faker->lastName();
            $newStudent->birth_date = $faker->date();
            $newStudent->birth_place = $faker->city(). $faker->country();
            $newStudent->residence_address = $faker->address();
            $newStudent->email = $faker->freeEmail();
            $newStudent->password = $faker->password();

            $newStudent->save();
        }
        // $students = config('students');

        // foreach ($students as $student) {
        //     $newStudent = new Student();

        //     $newStudent->name = $student['name'];
        //     $newStudent->surname = $student['surname'];
        //     $newStudent->birth_date = Carbon::createFromFormat('d/m/Y', $student['birth_date']); // date right format for db
        //     $newStudent->birth_place = $student['birth_place'];
        //     $newStudent->residence_address = $student['residence_address'];
        //     $newStudent->email = $student['email'];
        //     $newStudent->password = $student['password'];

        //     $newStudent->save();
        // };


    }
}
