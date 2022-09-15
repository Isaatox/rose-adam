<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchNobles extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $rosier = 'Rosier Noble';
        $parfum = 'Non';

        return view('livewire.rose.noble.search-nobles',[
            'roses' => Roses::where('name','like', $searchRoses)->where('categorie',$rosier)->where('parfume',$parfum)->paginate(12)
        ]);
    }
}
