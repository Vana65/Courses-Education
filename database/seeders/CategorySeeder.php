<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories=['laravel courses','php courses','css courses','html courses','javascript courses','UX courses'];

        foreach($categories as $category){
            Category::create([
                'name'=>$category,
            ]);

        }

    }
}
