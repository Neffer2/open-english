<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dash extends Component
{   
    // Filled
    public $pais;
    
    public function render()
    {
        return view('livewire.dash');
    } 
} 
