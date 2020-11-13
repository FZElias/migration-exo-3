<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("typeformations")->insert([
            "nom" => "Coding School 1",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 2",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 3",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 4",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 5",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 6",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 7",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 8",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 9",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 10",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 11",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 12",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 13",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 14",
        ]);
        DB::table("typeformations")->insert([
            "nom" => "Coding School 15",
        ]);
    }
}
