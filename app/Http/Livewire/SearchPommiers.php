<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fruitiers;
use Livewire\WithPagination;

class SearchPommiers extends Component
{
    use WithPagination;
    public $searchFruitiers;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchFruitiers = '%'.$this->searchFruitiers.'%';
        $categorie = "Pommier";

        return view('livewire.fruitier.pommier.search-pommiers',[
            'fruitiers' => Fruitiers::where('variete','like', $searchFruitiers)->where('categorie',$categorie)->paginate(12)
        ]);
    }
}