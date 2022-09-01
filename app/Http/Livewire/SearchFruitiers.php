<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fruitiers;
use Livewire\WithPagination;

class SearchFruitiers extends Component
{
    use WithPagination;
    public $searchFruitiers;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchFruitiers = '%'.$this->searchFruitiers.'%';
 
        return view('livewire.search-fruitiers',[
            'fruitiers' => Fruitiers::where('variete','like', $searchFruitiers)->paginate(12)
        ]);
    }
}
