<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchRoses extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
 
        return view('livewire.search-roses',[
            'roses' => Roses::where('name','like', $searchRoses)->paginate(12)
        ]);
    }
}
