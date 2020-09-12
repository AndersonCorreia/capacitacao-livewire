<?php

namespace App\Http\Livewire;

use App\Models\Hero;
use Livewire\Component;

class EditForm extends Component
{
    public $options = [];
    public ?Hero $hero;
    public $heroId;
    public $editing = false;
    public $edited = false;

    protected $listeners = ['heroesChange' => 'mount'];

    protected $rules = [
        'hero.name' => 'required|string',
        'hero.interpreted' => 'required|string',
        'hero.knowAs' => 'required|string',
        'hero.created' => 'required|int',
    ];

    public function mount()
    {
        $this->options = Hero::all();
        $this->heroId = $this->options->first()->id;
    }

    public function edit(Hero $hero)
    {
        $this->hero = $hero;
        $this->editing = true;
        $this->edited = false;
    }

    public function saveHero()
    {
        $this->validate();
        $this->hero->save();
        $this->editing = false;
        $this->edited = true;
        $this->options = Hero::all();
        $this->emit('heroesChange');
    }

    public function render()
    {
        return view('livewire.edit-form');
    }
}
