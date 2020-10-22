<?php

use App\Category;
use App\Product;
use App\ProductImage;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model Factory

        // factory(Category::class, 4)->create();
        // factory(Product::class, 24)->create();
        // factory(ProductImage::class, 150)->create();

        $categories = factory(Category::class, 4)->create();
        $categories->each(function($category) {
            $products = factory(Product::class, 5)->make();
            $category->products()->saveMany($products);

            $products->each(function($p) {
                $images = factory(ProductImage::class, 4)->make();
                $p->images()->saveMany($images);
            });
        });

    }
}