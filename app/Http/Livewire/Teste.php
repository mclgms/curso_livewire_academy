<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Teste extends Component
{
    public $nome = '';
    
    public function render()
    {
        return view('livewire.teste');
    }
}
