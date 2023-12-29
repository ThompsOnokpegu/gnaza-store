<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttributeOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $attributesOptions = [
            [
                'product_attribute_id'=>1,
                'value'=>'Blue',
            ],
            [
                'product_attribute_id'=>1,
                'value'=>'Red',
            ],
            [
                'product_attribute_id'=>2,
                'value'=>'S',
            ],
            [
                'product_attribute_id'=>2,
                'value'=>'M',
            ],
            [
                'product_attribute_id'=>2,
                'value'=>'L',
            ],
            [
                'product_attribute_id'=>2,
                'value'=>'XL',
            ],
            [
                'product_attribute_id'=>3,
                'value'=>'14K',
            ],
            [
                'product_attribute_id'=>3,
                'value'=>'18K',
            ],
            [
                'product_attribute_id'=>3,
                'value'=>'22K',
            ],
            
        ];
        DB::table('attribute_options')->insert($attributesOptions);
    }
}
