<?php

use App\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $studentsList = config('students');

       foreach ($studentsList as $stud) {
         $newStud = new Student();
         $newStud->name = $stud['name'];
         $newStud->lastName = $stud['lastName'];
         $newStud->mediaVoti = $stud['mediaVoti'];
         $newStud->save();
       }
    }
}
