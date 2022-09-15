<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchFleurs extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $rosier = 'Rosier a fleurs groupées';

        return view('livewire.rose.fleur.search-fleurs',[
            'roses' => Roses::where('name','like', $searchRoses)->where('categorie',$rosier)->paginate(12)
        ]);
    }
}
