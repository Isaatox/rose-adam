<?php

namespace App\Http\Controllers;

use App\Models\Roses;
use App\Models\Fruitiers;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function show()
    {
        return view('pages.index');
    }

    public function cgu()
    {
        return view('pages.mentions.mentions');
    }

    // public function showRoses()
    // {
    //     $roses = Roses::orderByDesc('created_at')
    //         ->paginate(12);
    //     $nbrRoses = Roses::orderByDesc('created_at')
    //         ->count();
    //     return view('pages.roses.index', compact('roses'), [
    //         "nbrroses" => $nbrRoses,
    //         'roses' => $roses,
    //     ]);

    // }

    // public function search(Request $request)
    // {
    //     $recherche = $request->search;
    //     $roses = Roses::select('*')
    //         ->where(function ($query) use ($recherche) {
    //             $query->where('name', 'LIKE', '%' . $recherche . '%');
    //         })
    //         ->paginate(12);
    //     $nbrRoses = Roses::select('*')
    //         ->where(function ($query) use ($recherche) {
    //             $query->where('name', 'LIKE', '%' . $recherche . '%');
    //         })
    //         ->count();
    //     return view('pages.roses.index', compact('roses', 'recherche'), [
    //         "nbrroses" => $nbrRoses,
    //         "roses" => $roses,
    //         "recherche" => $recherche,
    //     ]);
    // }

    // public function showFruitiers()
    // {
    //     $fruitiers = Fruitiers::orderByDesc('created_at')
    //         ->get();
    //     $nbrFruitiers = Fruitiers::orderByDesc('created_at')
    //         ->count();
    //     return view('pages.fruitiers.index', compact('fruitiers'), [
    //         "nbrfruitiers" => $nbrFruitiers,
    //         'fruitiers' => $fruitiers,
    //     ]);

    // }

    // public function searchFruitiers(Request $request)
    // {
    //     $recherche = $request->search;
    //     $fruitiers = Fruitiers::select('*')
    //         ->where(function ($query) use ($recherche) {
    //             $query->where('variete', 'LIKE', '%' . $recherche . '%');
    //         })
    //         ->get();
    //     $nbrFruitiers = Fruitiers::select('*')
    //         ->where(function ($query) use ($recherche) {
    //             $query->where('variete', 'LIKE', '%' . $recherche . '%');
    //         })
    //         ->count();
    //     return view('pages.fruitiers.index', compact('fruitiers', 'recherche'), [
    //         "nbrfruitiers" => $nbrFruitiers,
    //         "fruitiers" => $fruitiers,
    //         "recherche" => $recherche,
    //     ]);
    // }
}
