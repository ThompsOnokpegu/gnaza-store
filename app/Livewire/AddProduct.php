<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\AttributeOption;
use App\Models\Sku;

class AddProduct extends Component
{
    public $productType;
    public $selectedAttributes = [];
    public $selectedOptions = [];
    public $productVariations = [];
    public function render()
    {
        $attributes = ProductAttribute::all();
        $attributeOptions = [];
        foreach ($this->selectedAttributes as $selectedAttribute) {
            $attributeOptions[$selectedAttribute] = AttributeOption::where('product_attribute_id', $selectedAttribute)->get();
        }

        return view('livewire.product.add-product')
        ->extends('backend.layouts.main')
        ->with([
            'attributes' => $attributes,
            'attributeOptions' => $attributeOptions,
        ]);
    }

    public function saveProduct()
    {
        // Save product details to the 'products' table
        $product = Product::create([
            'name' => 'Your Product Name',
            'description' => 'Your Product Description',
        ]);

        // Save product variations to the 'SKUs' table
        foreach ($this->productVariations as $variation) {
            $sku = Sku::create([
                'product_id' => $product->id,
                // Assign price and stock based on $variation data
                'price' => $variation['price'],
                'stock' => $variation['stock'],
                // Other SKU details...
            ]);
            
            // Associate attribute options with the SKU in the 'attribute_option_sku' table
            $sku->attributeOptions()->attach($variation['options']);
        }

        // Reset properties after saving
        $this->reset([
            'productType',
            'selectedAttributes',
            'selectedOptions',
            'productVariations',
        ]);

        // Redirect or show success message
    }

    public function updatedSelectedAttributes($value)
    {
        // Reset selected options when attributes change
        $this->selectedOptions = [];

        // Clear previously set product variations
        $this->productVariations = [];

        // Build product variations based on selected attributes
        if ($this->productType === 'variable') {
            $optionsCombinations = $this->generateOptionsCombinations($value);
            foreach ($optionsCombinations as $combination) {
                $this->productVariations[] = [
                    'name' => $this->generateVariationName($combination), // Generate variation name based on options
                    'options' => $combination,
                    'price' => null,
                    'stock' => null,
                ];
            }
        }
    }

    private function generateOptionsCombinations($attributes)
    {
        $attributeOptions = [];
        foreach ($attributes as $attributeId) {
            $attributeOptions[] = AttributeOption::where('attribute_id', $attributeId)->pluck('id')->toArray();
        }

        return $this->cartesianProduct($attributeOptions);
    }

    private function cartesianProduct($arrays)
    {
        $result = [[]];
        foreach ($arrays as $property => $attributeOptions) {
            $tmp = [];
            foreach ($result as $resultItem) {
                foreach ($attributeOptions as $attributeOption) {
                    $tmp[] = array_merge($resultItem, [$attributeOption]);
                }
            }
            $result = $tmp;
        }

        return $result;
    }
    private function generateVariationName($options)
    {
        $variationName = '';
        foreach ($options as $optionId) {
            $option = AttributeOption::find($optionId);
            if ($option) {
                $variationName .= $option->value . ' ';
            }
        }
        // Trim any extra spaces and return the variation name
        return trim($variationName);
    }

}

