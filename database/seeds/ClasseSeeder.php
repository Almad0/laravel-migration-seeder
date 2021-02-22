<?php

use Faker\Generator as Faker;
use App\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 12 ; $i++) {
        $newClasse = new Classe();
        $newClasse->tipo = $faker->word();
        $newClasse->numeroStudenti = $faker->numberBetween(10, 30);
        $newClasse->save();
      }
    }
}
