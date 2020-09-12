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

    public function edit(Hero $hero){
        $this->hero = $hero;
        $this->editing = true;
    }

    public function saveHero(){
        $this->validate();
        $this->hero->save();
        $this->options = Hero::all();
        $this->editing = false;
        session()->flash('message', 'Registro do heroi atualizado com sucesso.');
    }

    public function render()
    {
        return <<<'blade'
            <div class="row col-12 card m-0 p-0 pb-2">
                <h4 class='card-header'> Edição de Heróis</h4>
                <div class='col-12 row m-0 p-2'>
                    <div class='col-6'>
                        <select wire:model="heroId" class="mr-2 w-75" required>
                        @foreach( $options as $option)
                            <option value={{$option->id}}>{{$option->name}}</option>
                        @endforeach
                        </select>
                        <button type="buttom" class='btn btn-sm btn-primary' wire:click='edit({{$heroId}})'> Editar </button>
                    </div>
                    @if (session()->has('message'))
                    <div class="alert alert-success col-6 m-0">
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
                <div class='m-0 px-2'>
                @if($editing)
                    @include('livewire.includes.formHero')
                @endif
                </div>
            </div>
        blade;
    }
}
