<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Category::factory(3)->create();

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Astronomy',
            'slug' => 'astronomy',
            'color' => 'yellow'
        ]);
    }
}
