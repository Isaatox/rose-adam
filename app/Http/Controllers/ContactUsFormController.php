<?php

namespace App\Http\Controllers;

use App\Models\Roses;
use App\Models\Contact;
use App\Models\Fruitiers;
use App\Models\TextIndex;
use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class ContactUsFormController extends Controller
{
    public function index(Request $request)
    {
        $nbrRoses = Roses::orderByDesc('created_at')
            ->count();
        $nbrFruitiers = Fruitiers::orderByDesc('created_at')
            ->count();

        $text_propos = TextIndex::all();
        $annonce = Annonce::all();

        return view('pages.index', [
            'nbrroses' => $nbrRoses,
            'nbrfruitiers' => $nbrFruitiers,
            'textpropos' => $text_propos,
            'annonce' => $annonce,
        ]);
    }

    public function text()
    {
        $text_propos = TextIndex::all();
        $annonce = Annonce::all();

        return view('admin.text', [
            'textpropos' => $text_propos,
            'annonce' => $annonce,
        ]);
    }

    public function editpropos(Request $request)
    {
        $request->validate([
            'description' => 'required',
            'quand' => 'required',
            'pourquoi' => 'required',
            'fait' => 'required',
        ]);

        $text = TextIndex::find(1);
        $text->propos_desc = $request->description;
        $text->propos_quand = $request->quand;
        $text->propos_pourquoi = $request->pourquoi;
        $text->propos_fait = $request->fait;
        $text->save();
        return Redirect::to('admin/text_accueil')->with('success', 'Text à propos modifié');
    }

    public function editannonce(Request $request)
    {
        $request->validate([
            'annonce' => 'required',
            'active' => 'required',
        ]);

        $annonce = Annonce::find(1);
        $annonce->annonce = $request->annonce;
        $annonce->active = $request->active;
        $annonce->save();
        return Redirect::to('admin/text_accueil')->with('success', 'Annonce modifié');
    }

    // Store Contact Form data
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required',
        ]);
        //  Store data in database
        Contact::create($request->all());
        //
        return redirect("/#nous_contacter")->with('success', 'Votre E-mail a bien été envoyé. Nous allons vous répondre dans les plus brefs délais !');
    }
}
