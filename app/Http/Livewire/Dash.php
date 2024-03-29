<?php

namespace App\Http\Livewire;

use App\Models\Informes;
use Livewire\Component;
use Livewire\WithPagination;


class Dash extends Component
{

    use WithPagination;

    // Filled
    public $pais;

    // Useful bar
    public $paises;
    protected $informes;
    public $search = '';
    public $camposArr = [];
    

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

        return redirect()->to('/dashboard/' . $this->pais);
    }

    public function updatedSearch()
    {
        $this->render();
    }

    private function updateCounts()
    {
        if ($this->pais == 'Todos') {
            $this->open_rate_count = Informes::sum('open_rate');
            $this->click_rate_count = Informes::sum('click_rate');
            $this->redencion_count = Informes::sum('redencion');
        } else {
            $this->open_rate_count = Informes::where('pais', $this->pais)->where('open_rate', 1)->count();
            $this->click_rate_count = Informes::where('pais', $this->pais)->where('click_rate', 1)->count();
            $this->redencion_count = Informes::where('pais', $this->pais)->where('redencion', 1)->count();
        }
    }

    public function updateField($id, $field, $value)
    {
        $this->camposArr[] = ['id' => $id, 'field' => $field, 'value' => $value];
    }

    public function applyChanges()
{
    foreach ($this->camposArr as $campo) {
        $informe = Informes::find($campo['id']);
        $informe->{$campo['field']} = $campo['value'] === "1" ? 1 : null;
        $informe->save();
    }
    // Clear the array after applying the changes
    $this->camposArr = [];
    // Update the counts and informes after the fields are updated
    $this->updateCountry();
}


    public function render()
    {
        $filtro = [];

        if ($this->pais == 'Todos') {
            $this->informes = Informes::where('email', 'like', '%' . $this->search . '%')->paginate(50);
        } else {

            if ($this->pais) {
                array_push($filtro, ['pais', $this->pais]);
            }

            $this->informes = Informes::where($filtro)
                ->where('email', 'like', '%' . $this->search . '%')
                ->paginate(50);
        }

        return view('livewire.dash', [
            'informes' => $this->informes,
            'open_rate_count' => $this->open_rate_count,
            'click_rate_count' => $this->click_rate_count,
            'redencion_count' => $this->redencion_count,
        ]);
    }
}
