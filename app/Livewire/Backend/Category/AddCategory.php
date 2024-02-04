<?php

namespace App\Livewire\Backend\Category;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;

class AddCategory extends Component
{
    #[Validate('required',message:'You must provide a category name.') ]
    public $name;

    public function render()
    {
        return view('livewire.backend.category.add-category')
        ->extends('backend.layouts.main');
    }

    public function addCategory(){
        $this->validate();
        $category = new Category();

        $category->name = $this->name;
        $category->slug = Str::slug($this->name);

        $category->save();
        $this->reset();
        $this->dispatch('referesh-category');

    }
}
