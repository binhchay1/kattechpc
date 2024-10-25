<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('category_posts')->insert([
            'id' => 1,
            'name' => "Uncategory",
            'slug' => "uncategory",
            'parent' => 0,
            'image' => asset('images/uncategory.png'),
        ]);
    }
}
