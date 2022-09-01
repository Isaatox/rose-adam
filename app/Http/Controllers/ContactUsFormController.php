<?php

namespace App\Http\Controllers;

use App\Models\Roses;
use App\Models\Contact;
use App\Models\Fruitiers;
use Illuminate\Http\Request;

class ContactUsFormController extends Controller
{
    public function index(Request $request)
    {
        $nbrRoses = Roses::orderByDesc('created_at')
            ->count();
        $nbrFruitiers = Fruitiers::orderByDesc('created_at')
            ->count();
        return view('pages.index', [
            'nbrroses' => $nbrRoses,
            'nbrfruitiers' => $nbrFruitiers,
        ]);
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
