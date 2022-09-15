<?php

namespace App\Http\Livewire;

use App\Models\Roses;
use Livewire\Component;
use Livewire\WithPagination;

class SearchTiges extends Component
{
    use WithPagination;
    public $searchRoses;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchRoses = '%'.$this->searchRoses.'%';
        $tige = 'Oui';

        return view('livewire.rose.tige.search-tiges',[
            'roses' => Roses::where('name','like', $searchRoses)->where('tige',$tige)->paginate(12)
        ]);
    }
}
