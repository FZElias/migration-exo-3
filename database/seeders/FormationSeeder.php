<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("formations")->insert([
            "nom" => "Coding School",
            "description" => "Formation longue de Codage"
        ]);
        DB::table("formations")->insert([
            "nom" => "Marketing Lab",
            "description" => "Formation longue de Marketing Digital"
        ]);
        DB::table("formations")->insert([
            "nom" => "Formations TIC",
            "description" => "Formation courtes pour des outils précis"
        ]);
        DB::table("formations")->insert([
            "nom" => "Webmaster School",
            "description" => "Formation de 3 mois pour la création des sites web"
        ]);
        DB::table("formations")->insert([
            "nom" => "AWS",
            "description" => "Formation de 3 mois pour les services d'Amazon"
        ]);
        DB::table("formations")->insert([
            "nom" => "Salesforce",
            "description" => "Formation de 2 semaines pour la préparation de la certification Salesforce"
        ]);
    }
}
