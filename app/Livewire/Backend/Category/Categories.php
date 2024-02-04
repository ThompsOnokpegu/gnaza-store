<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Livewire\Component;
use Livewire\Attributes\On;

class Categories extends Component
{
    #[On('referesh-category')]
    public function render()
    {
        $categories = Category::all();
        return view('livewire.backend.category.categories')
        ->with(['categories' => $categories]);
    }

    public function deleteCategory(Category $category){
        //$category = Category::find($category_id)->first();
        $category->delete();
        $this->dispatch('referesh-category');
        return redirect()->route('product.categories');
    }
}
