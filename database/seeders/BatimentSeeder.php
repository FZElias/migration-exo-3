<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BatimentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("batiments")->insert([
            "nom" => "MolenGeek",
            "description" => "MolenGeek remplit une mission de sensibilisation à l’entrepreneuriat et se trouve au début du parcours de l’entrepreneur. Grâce à MolenGeek, l’entrepreneur pourra découvrir l’entrepreneuriat au travers des événements MolenGeek et pourra également apprendre les langages informatiques afin de programmer son projet au travers de la « Coding School »."
        ]);
    }
}
