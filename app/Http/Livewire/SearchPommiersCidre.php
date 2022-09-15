<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fruitiers;
use Livewire\WithPagination;

class SearchPommiersCidre extends Component
{
    use WithPagination;
    public $searchFruitiers;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchFruitiers = '%'.$this->searchFruitiers.'%';
        $categorie = "Pommier à cidre";

        return view('livewire.fruitier.pommier-cidre.search-pommiers-cidre',[
            'fruitiers' => Fruitiers::where('variete','like', $searchFruitiers)->where('categorie',$categorie)->paginate(12)
        ]);
    }
}
