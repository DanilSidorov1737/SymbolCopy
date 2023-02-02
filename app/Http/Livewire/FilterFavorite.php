<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Codes;

class FilterFavorite extends Component
{
    public $selectedCategory;

    public function render()
    {
        $categories = Codes::distinct()->pluck('category');
        $emojis = Codes::query();

        return view('livewire.filter-favorite', [
            'categories' => $categories,
            'emojis' => $emojis
        ]);
    }

    public function updatedSelectedCategory()
    {
        $this->redirect(route('favorite', ['category' => $this->selectedCategory]));
    }
}
