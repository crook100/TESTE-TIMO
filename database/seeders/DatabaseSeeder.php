<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
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

        $produto1 = new Product();
        $produto1->name = "Produto 1";
        $produto1->price = 100;
        $produto1->description = "Eu sou um produto!";
        $produto1->category_id = 1;
        $produto1->save();

        $produto2 = new Product();
        $produto2->name = "Produto 2";
        $produto2->price = 50;
        $produto2->description = "Eu sou outro produto!";
        $produto2->category_id = 2;
        $produto2->save();
    }
}
