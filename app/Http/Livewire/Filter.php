<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Codes;

class Filter extends Component
{
    public $selectedCategory;

    public function render()
    {
        $categories = Codes::distinct()->pluck('category');
        $emojis = Codes::query();

        return view('livewire.filter', [
            'categories' => $categories,
            'emojis' => $emojis
        ]);
    }

    public function updatedSelectedCategory()
    {
        $this->redirect(route('home', ['category' => $this->selectedCategory]));
    }
}
