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

    // public function submit()
    // {
    //     Informes::create([
    //         'nombre' => $this->nombre,
    //         'pais' => $this->pais,
    //         'idioma' => $this->idioma,
    //         'email' => $this->email,
    //         'open_rate' => $this->open_rate,
    //         'click_rate' => $this->click_rate,
    //         'redencion' => $this->redencion,
    //     ]);
        
    //     //Reset al form
    //     $this->reset(['nombre', 'pais', 'idioma', 'email', 'open_rate', 'click_rate', 'redencion']);

    //     $this->dispatchBrowserEvent('formSubmitted');
        
    // }

    public function submit()
{
    try {
        $validatedData = $this->validate([
            'nombre' => 'required',
            'pais' => 'required',
            'idioma' => 'required',
            'email' => 'required|email|unique:informes,email',
            'open_rate' => 'nullable|in:0,1',
            'click_rate' => 'nullable|in:0,1',
            'redencion' => 'nullable|in:0,1',
        ]);

        Informes::create($validatedData);

        //Reset the form
        $this->reset(['nombre', 'pais', 'idioma', 'email', 'open_rate', 'click_rate', 'redencion']);

        $this->dispatchBrowserEvent('formSubmitted');
    } catch (\Illuminate\Validation\ValidationException $e) {
        $this->dispatchBrowserEvent('formError', ['errors' => $e->validator->errors()->all()]);
    }
}

    public function render()
    {
        return view('livewire.create-informe');
    }
}
