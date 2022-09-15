<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchParfumes extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $parfum = 'Oui';

        return view('livewire.rose.parfume.search-parfumes',[
            'roses' => Roses::where('name','like', $searchRoses)->where('parfume',$parfum)->paginate(12)
        ]);
    }
}
