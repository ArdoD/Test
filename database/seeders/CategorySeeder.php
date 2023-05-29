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
        Category::create([
            'name' => 'Adventure'
        ]);
        Category::create([
            'name' => 'Horror'
        ]);
        Category::create([
            'name' => 'Romance'
        ]);
        Category::create([
            'name' => 'Jungle'
        ]);

    }
}
