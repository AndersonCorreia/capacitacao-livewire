<?php

namespace App\Http\Livewire;

use App\Models\Hero;
use Livewire\Component;
use Livewire\WithPagination;

class PaginationForm extends Component
{
    use WithPagination;
    public $search = '';
    protected $paginationTheme = 'bootstrap';
    protected $query = ['search' => ['expect' => "''"]];
    protected $listeners = ['heroesChange' => 'render'];

    public function updatedSearch(){
        $this->resetPage();
    }

    public function deleteHero(Hero $hero){
        $hero->delete();
        $this->resetPage();
        $this->emit('heroesChange');
    }

    public function render()
    {   
        if(  $this->search != ''){
            $heroes = Hero::where('id', '=',  $this->search)
                            ->orWhere('name', 'like',   '%'.$this->search.'%')
                            ->orWhere('knowAs', 'like',   '%'.$this->search.'%')->paginate(2);
        }else {
            $heroes  = Hero::paginate(2);
        }
        return view('livewire.pagination-form',['heroes' => $heroes]);
    }
}
