<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new Category();
        $category1->name = "PHP";
        $category1->save();

        $category2 = new Category();
        $category2->name = "JS";
        $category2->save();

        $category3 = new Category();
        $category3->name = "CSS";
        $category3->save();
    }
}
