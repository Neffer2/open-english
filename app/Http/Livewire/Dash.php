<?php

namespace App\Http\Livewire;

use App\Models\Informes;
use Livewire\Component;

class Dash extends Component
{
    // Filled
    public $pais;

    // Useful bar
    public $paises;
    public $informes;

    public $open_rate_count, $click_rate_count, $redencion_count;

    //Methods
    public function mount()
    { //Constructor  
        $this->paises = config('paises');
        $this->updateCounts();
    }

    public function updateCountry()
    {
        $this->informes = Informes::where('Pais', $this->pais)->get();
        $this->updateCounts();
    }

    private function updateCounts()
    {
        $this->open_rate_count = Informes::where('pais', $this->pais)->where('open_rate', 1)->count();
        $this->click_rate_count = Informes::where('pais', $this->pais)->where('click_rate', 1)->count();
        $this->redencion_count = Informes::where('pais', $this->pais)->where('redencion', 1)->count();
    }


    public function render()
    {
        $filtro = [];

        if ($this->pais) {
            array_push($filtro, ['pais', $this->pais]);
        }

        $this->informes = Informes::where($filtro)->get();

        return view('livewire.dash', [
            'informes' => $this->informes,
            'open_rate_count' => $this->open_rate_count,
            'click_rate_count' => $this->click_rate_count,
            'redencion_count' => $this->redencion_count,
        ]);
    }
}
