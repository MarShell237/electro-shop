<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
          ["product/phone.png","Smartphone Ultra-rapide","Un smartphone performant pour tous vos besoins, avec un design moderne.",35000],
          ["product/laptop.jpg","Ordinateur Portable Haute Performance","Un ordinateur portable idéal pour le travail et les loisirs, avec une batterie longue durée.",85000],
          ["product/tablets.png","Tablette Android","La tablette idéale pour le divertissement et la productivité, légère et rapide.",25000],
          ["product/headphone.png","Casque Audio Bluetooth","Un casque audio avec une qualité sonore exceptionnelle et une connexion sans fil.",15000],
          ["product/gaming.png","Accessoires Gaming","Améliorez votre expérience de jeu avec nos accessoires de qualité supérieure.",20000],
          ["product/wearables.png","Montre Connectée","Restez connecté et suivez votre activité avec cette montre connectée moderne.",30000],
          ["product/phone.png","Smartphone Ultra-rapide","Un smartphone performant pour tous vos besoins, avec un design moderne.",35000],
          ["product/laptop.jpg","Ordinateur Portable Haute Performance","Un ordinateur portable idéal pour le travail et les loisirs, avec une batterie longue durée.",85000],
          ["product/tablets.png","Tablette Android","La tablette idéale pour le divertissement et la productivité, légère et rapide.",25000],
          ["product/headphone.png","Casque Audio Bluetooth","Un casque audio avec une qualité sonore exceptionnelle et une connexion sans fil.",15000],
          ["product/gaming.png","Accessoires Gaming","Améliorez votre expérience de jeu avec nos accessoires de qualité supérieure.",20000],
          ["product/wearables.png","Montre Connectée","Restez connecté et suivez votre activité avec cette montre connectée moderne.",30000],
          ["product/phone.png","Smartphone Ultra-rapide","Un smartphone performant pour tous vos besoins, avec un design moderne.",35000],
          ["product/laptop.jpg","Ordinateur Portable Haute Performance","Un ordinateur portable idéal pour le travail et les loisirs, avec une batterie longue durée.",85000],
          ["product/tablets.png","Tablette Android","La tablette idéale pour le divertissement et la productivité, légère et rapide.",25000],
          ["product/headphone.png","Casque Audio Bluetooth","Un casque audio avec une qualité sonore exceptionnelle et une connexion sans fil.",15000],
          ["product/gaming.png","Accessoires Gaming","Améliorez votre expérience de jeu avec nos accessoires de qualité supérieure.",20000],
          ["product/wearables.png","Montre Connectée","Restez connecté et suivez votre activité avec cette montre connectée moderne.",30000],
          ["product/phone.png","Smartphone Ultra-rapide","Un smartphone performant pour tous vos besoins, avec un design moderne.",35000],
          ["product/laptop.jpg","Ordinateur Portable Haute Performance","Un ordinateur portable idéal pour le travail et les loisirs, avec une batterie longue durée.",85000],
          ["product/tablets.png","Tablette Android","La tablette idéale pour le divertissement et la productivité, légère et rapide.",25000],
          ["product/headphone.png","Casque Audio Bluetooth","Un casque audio avec une qualité sonore exceptionnelle et une connexion sans fil.",15000],
          ["product/gaming.png","Accessoires Gaming","Améliorez votre expérience de jeu avec nos accessoires de qualité supérieure.",20000],
          ["product/wearables.png","Montre Connectée","Restez connecté et suivez votre activité avec cette montre connectée moderne.",30000],
          ["product/phone.png","Smartphone Ultra-rapide","Un smartphone performant pour tous vos besoins, avec un design moderne.",35000],
          ["product/laptop.jpg","Ordinateur Portable Haute Performance","Un ordinateur portable idéal pour le travail et les loisirs, avec une batterie longue durée.",85000],
          ["product/tablets.png","Tablette Android","La tablette idéale pour le divertissement et la productivité, légère et rapide.",25000],
          ["product/headphone.png","Casque Audio Bluetooth","Un casque audio avec une qualité sonore exceptionnelle et une connexion sans fil.",15000],
          ["product/gaming.png","Accessoires Gaming","Améliorez votre expérience de jeu avec nos accessoires de qualité supérieure.",20000],
          ["product/wearables.png","Montre Connectée","Restez connecté et suivez votre activité avec cette montre connectée moderne.",30000],
        ];

        foreach($products as $product){
          Product::factory()->create([
            "image" => $product[0],
            "name" => $product[1],
            "description" => $product[2],
            "price" => $product[3],
            "category_id" => Category::all()->random()
          ]);
        }
    }
}
