<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $categories = factory(Category::class, 4)->create();
        $categories->each(function ($category) {
            $products = factory(Product::class, 5)->make();
            $category->products()->saveMany($products);

            $products->each(function ($product) {
                $images = factory(ProductImage::class, 3)->make();
                $product->images()->saveMany($images);
            });
        });
    }
}
