<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchGrimpants extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $rosier = 'Rosier Grimpant';

        return view('livewire.rose.grimpant.search-grimpants',[
            'roses' => Roses::where('name','like', $searchRoses)->where('categorie',$rosier)->paginate(12)
        ]);
    }
}
