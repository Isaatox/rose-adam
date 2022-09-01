<?php

namespace App\Http\Controllers;

use App\Models\Fruitiers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FruitiersController extends Controller
{
/**
 * Write code on Method
 *
 * @return response()
 */
    public function index(Request $request)
    {
        $request->session()->forget('fruitier');

        $fruitiers = \App\Models\Fruitiers::all();

        return view('admin.fruitier', compact('fruitiers'));
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function createStep1(Request $request)
    {
        $fruitier = $request->session()->get('rose');

        return view('admin.create.fruitier.step1', compact('fruitier'));
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'variete' => 'required',
            'description' => 'required',
            'recompenses' => 'required',
            'prix' => 'required',
        ]);
        if (empty($request->session()->get('fruitier'))) {
            $fruitier = new \App\Models\Fruitiers();
            $fruitier->fill($validatedData);
            $request->session()->put('fruitier', $fruitier);
        } else {
            $fruitier = $request->session()->get('fruitier');
            $fruitier->fill($validatedData);
            $request->session()->put('fruitier', $fruitier);
        }
        return redirect('/admin/fruitiers/new-2');
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function createStep2(Request $request)
    {
        $fruitier = $request->session()->get('fruitier');

        return view('admin.create.fruitier.step2', compact('fruitier'));
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'rendement' => 'required',
            'sucre' => 'required',
            'acidite' => 'required',
            'parfum' => 'required',
            'couleur' => 'required',
            'largeur_cm' => 'required',
            'hauteur_cm' => 'required',
            'maladies' => 'required',
        ]);
        if (empty($request->session()->get('fruitier'))) {
            $fruitier = new \App\Models\Fruitiers();
            $fruitier->fill($validatedData);
            $request->session()->put('fruitier', $fruitier);
        } else {
            $fruitier = $request->session()->get('fruitier');
            $fruitier->fill($validatedData);
            $request->session()->put('fruitier', $fruitier);
        }
        return redirect()->route('fruitier.create.step.3');
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function createStep3(Request $request)
    {
        $fruitier = $request->session()->get('fruitier');
        return view('admin.create.fruitier.step3', compact('fruitier'));
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function PostcreateStep3(Request $request)
    {
        $fruitier = $request->session()->get('fruitier');

        if (!isset($fruitier->fruitierimg)) {
            $request->validate([
                'fruitierimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $fileName = "fruitierImage-" . time() . '.' . request()->fruitierimg->getClientOriginalExtension();
            $request->fruitierimg->storeAs('fruitierimg', $fileName);
            $fruitier = $request->session()->get('fruitier');
            $fruitier->fruitierimg = $fileName;
            $request->session()->put('fruitier', $fruitier);
        }
        return view('admin.create.fruitier.step4', compact('fruitier'));
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function removeImage(Request $request)
    {
        $fruitier = $request->session()->get('fruitier');

        $fruitier->fruitierimg = null;

        return view('admin.create.fruitier.step3', compact('fruitier'));
    }

/**
 * Write code on Method
 *
 * @return response()
 */
    public function store(Request $request)
    {
        $fruitier = $request->session()->get('fruitier');

        $fruitier->save();

        return redirect('/admin/fruitier');
    }

    public function showedit()
    {
        $id = request("id");
        $fruitier = Fruitiers::where('id', $id)
            ->first();
        return view('admin.update.editfruitier', [
            'fruitier' => $fruitier,
        ]);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'variete' => 'required',
            'description' => 'required',
            'recompenses' => 'required',
            'prix' => 'required',
            'rendement' => 'required',
            'sucre' => 'required',
            'acidite' => 'required',
            'parfum' => 'required',
            'couleur' => 'required',
            'hauteur_cm' => 'required',
            'maladies' => 'required',
        ]);

        $id = request("id");
        $fruitier = Fruitiers::find($id);
        $fruitier->variete = $request->variete;
        $fruitier->description = $request->description;
        $fruitier->recompenses = $request->recompenses;
        $fruitier->prix = $request->prix;
        $fruitier->rendement = $request->rendement;
        $fruitier->sucre = $request->sucre;
        $fruitier->acidite = $request->acidite;
        $fruitier->couleur = $request->couleur;
        $fruitier->parfum = $request->parfum;
        $fruitier->hauteur_cm = $request->hauteur_cm;
        $fruitier->largeur_cm = $request->largeur_cm;
        $fruitier->maladies = $request->maladies;
        $fruitier->save();
        // return Redirect::to('admin/question');
        return Redirect::to('admin/fruitier')->with('success', 'Fruitier ' . $fruitier->variete . ' modifié');
    }

    public function delete()
    {
        $id = request("id");

        Fruitiers::where('id', $id)
            ->delete();

        return redirect('admin/fruitier')->with('error', 'Fruitier supprimé');
    }

}
