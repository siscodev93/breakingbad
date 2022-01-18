<?php

namespace App\Http\Livewire;

use Livewire\Component;
use \App\Models as Models;

class CharacterSearchform extends Component
{
    public $query;

    public function render()
    {
        $characters = (empty($this->query)) ? Models\Character::all() : Models\Character::where('name', 'ilike', "%{$this->query}%")->get();
        return view('livewire.character-searchform', ['characters' => $characters]);
    }
}
