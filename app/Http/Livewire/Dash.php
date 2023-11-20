<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dash extends Component
{   
    public $flags = ['Argentina', 'Bolivia', 'Chile', 'Colombia', 'Costa Rica', 'Ecuador', 'España',
                    'EEUU', 'Guatemala', 'México', 'Perú', 'República Dominicana', 'Uruguay'];

    public function render()
    {
        return view('livewire.dash');
    }
}
