<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fruitiers;
use Livewire\WithPagination;

class SearchCerisiers extends Component
{
    use WithPagination;
    public $searchFruitiers;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchFruitiers = '%'.$this->searchFruitiers.'%';
        $categorie = "Cerisier";

        return view('livewire.fruitier.cerisier.search-cerisiers',[
            'fruitiers' => Fruitiers::where('variete','like', $searchFruitiers)->where('categorie',$categorie)->paginate(12)
        ]);
    }
}
