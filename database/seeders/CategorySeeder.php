<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name'=>'Earrings',
                'slug'=>'earrings'
            ],
            [
                'name'=>'Necklaces',
                'slug'=>'necklaces'
            ],
            [
                'name'=>'Bracelets',
                'slug'=>'bracelets'
            ],
            [
                'name'=>'Men Watches',
                'slug'=>'men-watches'
            ],
            [
                'name'=>'Women Watches',
                'slug'=>'women-watches'
            ],
            [
                'name'=>'Jewelry Set',
                'slug'=>'jewelry-set'
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
