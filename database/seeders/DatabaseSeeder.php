<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $informatica = new Category();
        $informatica->name = "Informática";
        $informatica->fee = 5;
        $informatica->save();

        $automotivo = new Category();
        $automotivo->name = "Automotivo";
        $automotivo->fee = 2.5;
        $automotivo->save();

        $moveis = new Category();
        $moveis->name = "Móveis";
        $moveis->fee = 1;
        $moveis->save();
    }
}
