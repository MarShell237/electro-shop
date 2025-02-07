<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ["Smartphones","Ordinateurs Portables","Tablettes","Accessoires","Casques Audio","Télévisions","Gaming","Objets Connectés"];
        foreach($categories as $category){
          Category::create(['name' => $category]);
        }
    }
}
