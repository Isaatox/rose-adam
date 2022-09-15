<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchNoblesparfums extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $rosier = 'Rosier Noble';
        $parfum = 'Oui';

        return view('livewire.rose.noble-parfum.search-noblesparfums',[
            'roses' => Roses::where('name','like', $searchRoses)->where('categorie',$rosier)->where('parfume',$parfum)->paginate(12)
        ]);
    }
}
