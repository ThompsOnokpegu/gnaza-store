<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan db:seed --class=AttributeSeeder
     */
    public function run(): void
    {
        $attributes = [
            [
                'name'=>'Color',
                'slug'=>'color',
            ],
            [
                'name'=>'Size',
                'slug'=>'size',
            ],
            [
                'name'=>'Karat',
                'slug'=>'karat',
            ],
            
        ];
        // Insert records into the database
        DB::table('product_attributes')->insert($attributes);
    }
}
