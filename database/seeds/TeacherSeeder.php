<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $teacherList = [
        [
          'name' => 'Ottavio',
          'lastName' => 'Fogliata'
          'materia' => 'Programmazione'
        ],
        [
          'name' => 'Carmelo',
          'lastName' => 'Pinguino'
          'materia' => 'Programmazione'
        ],
        [
          'name' => 'Magica',
          'lastName' => 'Emi'
          'materia' => 'Magia'
        ],
        [
          'name' => 'Luigi',
          'lastName' => 'De Amicis'
          'materia' => 'Armi pesanti'
        ]
      ];

      foreach ($teacherList as $Teac) {
        $newTeac = new Teacher();
        $newTeac->name = $Teac['name'];
        $newTeac->lastName = $Teac['lastName'];
        $newTeac->materia = $Teac['materia'];
        $newTeac->save();
      }
    }
}
