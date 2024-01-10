<?php

namespace App\Http\Livewire;
use App\Models\Informes;
use Livewire\Component;

class CreateInforme extends Component
{
    //Campos en la BD
    public $nombre;
    public $pais;
    public $idioma;
    public $email;
    public $open_rate;
    public $click_rate;
    public $redencion;

    // Useful bar
    public $paises;


    public function mount()
    { //Constructor  
        $this->paises = config('paises');
    }

    public function submit()
    {
        Informes::create([
            'nombre' => $this->nombre,
            'pais' => $this->pais,
            'idioma' => $this->idioma,
            'email' => $this->email,
            'open_rate' => $this->open_rate,
            'click_rate' => $this->click_rate,
            'redencion' => $this->redencion,
        ]);
        
        //Reset al form
        $this->reset(['nombre', 'pais', 'idioma', 'email', 'open_rate', 'click_rate', 'redencion']);

        $this->dispatchBrowserEvent('formSubmitted');
        
    }

    public function render()
    {
        return view('livewire.create-informe');
    }
}
