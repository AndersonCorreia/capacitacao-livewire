<?php

namespace App\Http\Livewire;

use App\Models\Hero;
use Livewire\Component;

class CreateForm extends Component
{
    public Hero $hero;
    public $heroCreated = false;

    protected $rules = [
        'hero.name' => 'required|string',
        'hero.interpreted' => 'required|string',
        'hero.knowAs' => 'required|string',
        'hero.created' => 'required|int',
    ];

    public function mount(){
        $this->hero = new Hero();
    }
    public function updated(){
        $this->heroCreated = false;
    }

    public function saveHero(){
        $this->validate();
        $this->hero->save();
        $this->hero = new Hero();
        $this->emit('heroesChange');
        $this->heroCreated = true;
    }
    
    public function render()
    {
        return view('livewire.create-form');
    }
}
