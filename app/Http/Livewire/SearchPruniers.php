<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fruitiers;
use Livewire\WithPagination;

class SearchPruniers extends Component
{
    use WithPagination;
    public $searchFruitiers;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchFruitiers = '%'.$this->searchFruitiers.'%';
        $categorie = "Prunier";

        return view('livewire.fruitier.prunier.search-pruniers',[
            'fruitiers' => Fruitiers::where('variete','like', $searchFruitiers)->where('categorie',$categorie)->paginate(12)
        ]);
    }
}
