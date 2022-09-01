<?php

namespace App\Http\Controllers;

use App\Models\Roses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RosesController extends Controller
{
/**
 * Write code on Method
 *
 * @return response()
 */
    public function index(Request $request)
    {
        $request->session()->forget('rose');

        $roses = \App\Models\Roses::all();

        return view('admin.roses', compact('roses'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep1(Request $request)
    {
        $rose = $request->session()->get('rose');

        return view('admin.create.rose.step1', compact('rose'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep1(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'recompenses' => 'required',
            'prix' => 'required',
        ]);
        if (empty($request->session()->get('rose'))) {
            $rose = new \App\Models\Roses();
            $rose->fill($validatedData);
            $request->session()->put('rose', $rose);
        } else {
            $rose = $request->session()->get('rose');
            $rose->fill($validatedData);
            $request->session()->put('rose', $rose);
        }
        return redirect('/admin/roses/new-2');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep2(Request $request)
    {
        $rose = $request->session()->get('rose');

        return view('admin.create.rose.step2', compact('rose'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'marque' => 'required',
            'denomination' => 'required',
            'edition' => 'required',
            'type' => 'required',
            'gamme' => 'required',
            'forme' => 'required',
            'couleur' => 'required',
            'largeur_diam' => 'required',
            'nb_petales' => 'required',
            'parfum' => 'required',
            'port' => 'required',
            'vegetation' => 'required',
            'hauteur_cm' => 'required',
            'largeur_cm' => 'required',
            'feuillage' => 'required',
            'maladies' => 'required',
            'inflorescence' => 'required',
            'floraison' => 'required',
        ]);
        if (empty($request->session()->get('rose'))) {
            $rose = new \App\Models\Roses();
            $rose->fill($validatedData);
            $request->session()->put('rose', $rose);
        } else {
            $rose = $request->session()->get('rose');
            $rose->fill($validatedData);
            $request->session()->put('rose', $rose);
        }
        return redirect()->route('rose.create.step.3');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function createStep3(Request $request)
    {
        $rose = $request->session()->get('rose');
        return view('admin.create.rose.step3', compact('rose'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function PostcreateStep3(Request $request)
    {
        $roses = $request->session()->get('rose');

        if (!isset($rose->roseimg)) {
            $request->validate([
                'roseimg' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            $fileName = "roseImage-" . time() . '.' . request()->roseimg->getClientOriginalExtension();
            $request->roseimg->storeAs('roseimg', $fileName);
            $rose = $request->session()->get('rose');
            $rose->roseimg = $fileName;
            $request->session()->put('rose', $rose);
        }
        return view('admin.create.rose.step4', compact('rose'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function removeImage(Request $request)
    {
        $rose = $request->session()->get('rose');

        $rose->roseimg = null;

        return view('admin.create.rose.step3', compact('rose'));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(Request $request)
    {
        $rose = $request->session()->get('rose');

        $rose->save();

        return redirect('/admin/roses');
    }

    public function showedit()
    {
        $id = request("id");
        $rose = Roses::where('id', $id)
            ->first();
        return view('admin.update.editrose', [
            'rose' => $rose,
        ]);
    }

    public function edit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'recompenses' => 'required',
            'prix' => 'required',
            'marque' => 'required',
            'denomination' => 'required',
            'edition' => 'required',
            'type' => 'required',
            'gamme' => 'required',
            'forme' => 'required',
            'couleur' => 'required',
            'largeur_diam' => 'required',
            'nb_petales' => 'required',
            'parfum' => 'required',
            'port' => 'required',
            'vegetation' => 'required',
            'hauteur_cm' => 'required',
            'largeur_cm' => 'required',
            'feuillage' => 'required',
            'maladies' => 'required',
            'inflorescence' => 'required',
            'floraison' => 'required',
        ]);

        $id = request("id");
        $rose = Roses::find($id);
        $rose->name = $request->name;
        $rose->description = $request->description;
        $rose->recompenses = $request->recompenses;
        $rose->prix = $request->prix;
        $rose->marque = $request->marque;
        $rose->denomination = $request->denomination;
        $rose->edition = $request->edition;
        $rose->type = $request->type;
        $rose->gamme = $request->gamme;
        $rose->forme = $request->forme;
        $rose->couleur = $request->couleur;
        $rose->largeur_diam = $request->largeur_diam;
        $rose->nb_petales = $request->nb_petales;
        $rose->parfum = $request->parfum;
        $rose->port = $request->port;
        $rose->vegetation = $request->vegetation;
        $rose->hauteur_cm = $request->hauteur_cm;
        $rose->largeur_cm = $request->largeur_cm;
        $rose->feuillage = $request->feuillage;
        $rose->maladies = $request->maladies;
        $rose->inflorescence = $request->inflorescence;
        $rose->floraison = $request->floraison;
        $rose->save();
        // return Redirect::to('admin/question');
        return Redirect::to('admin/roses')->with('success', 'Rose ' . $rose->name . ' modifiée');
    }

    public function delete()
    {
        $id = request("id");

        Roses::where('id', $id)
            ->delete();

            return redirect('admin/roses')->with('error','Rose  supprimée');
    }

}
