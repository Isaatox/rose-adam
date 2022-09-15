<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fruitiers;
use Livewire\WithPagination;

class SearchAbricotiers extends Component
{
    use WithPagination;
    public $searchFruitiers;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchFruitiers = '%'.$this->searchFruitiers.'%';
        $categorie = "Abricotier";

        return view('livewire.fruitier.abricotier.search-abricotiers',[
            'fruitiers' => Fruitiers::where('variete','like', $searchFruitiers)->where('categorie',$categorie)->paginate(12)
        ]);
    }
}
