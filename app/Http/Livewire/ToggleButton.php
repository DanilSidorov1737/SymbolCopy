<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Codes;

class ToggleButton extends Component
{
    public Codes $codes;
    public $codeId;
    public $active;
 
    public function mount($codeId)
    {
        $this->codes = Codes::find($codeId);
        $this->active = (bool) $this->codes->active;
    }

    public function toggleCode()
    {
        $this->codes->active = !$this->codes->active;
        $this->codes->save();
        $this->active = !$this->active;
    }

    public function render()
    {
        return view('livewire.toggle-button', [ 'active' => $this->active]);
    }
}