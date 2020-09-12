<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Livewire extends Component
{
    public $CreatForm = true;
    public $EditForm = true;
    public $PaginationForm = true;

    public function render()
    {
        return view('livewire.livewire');
    }
}
