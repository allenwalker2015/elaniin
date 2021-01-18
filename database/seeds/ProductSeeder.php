<?php

use App\models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(
            [
                "SKU" => "BE123456",
                "nombre" => "Brown eggs",
                "cantidad" => "10",
                "precio" => "1.50",
                "descripcion" => "Raw organic brown eggs in a basket",
                "imagen" => "https://static.toiimg.com/photo/68523233.cms"
            ]);
        Product::create([
            "SKU" => "SFS123",
            "nombre" => "Sweet fresh stawberry",
            "cantidad" => "3",
            "precio" => "7.50",
            "descripcion" => "Sweet fresh stawberry on the wooden table",
            "imagen" => "https://previews.123rf.com/images/digitalsun/digitalsun1204/digitalsun120400037/13046010-sweet-fresh-strawberries-in-a-red-bowl.jpg"
        ]);
        Product::create([
            "SKU" => "BE123456",
            "nombre" => "Asparagus",
            "cantidad" => "5",
            "precio" => "7.50",
            "descripcion" => "Asparagus with ham on the wooden table",
            "imagen" => "https://hips.hearstapps.com/hmg-prod/images/delish-grilled-asparagus-1522951967.jpg"
        ]);
        Product::create([
            "id_product" => 4,
            "SKU" => "BE123456",
            "nombre" => "Green smoothie",
            "cantidad" => "100",
            "precio" => "2.25",
            "descripcion" => "Glass of green smoothie with quail egg's yolk, served with cocktail tube, green apple and baby spinach leaves over tin surface.",
            "imagen" => "https://joyfoodsunshine.com/wp-content/uploads/2019/07/green-smoothie-recipe-2.jpg"
        ]);
    }
}
