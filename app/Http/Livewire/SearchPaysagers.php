<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPaysagers extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $rosier = 'Rosier Paysager';

        return view('livewire.rose.paysager.search-paysagers',[
            'roses' => Roses::where('name','like', $searchRoses)->where('categorie',$rosier)->paginate(12)
        ]);
    }
}
