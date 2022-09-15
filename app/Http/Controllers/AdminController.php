<?php

namespace App\Http\Controllers;

use App\Models\Roses;
use App\Models\Contact;
use App\Models\Fruitiers;

class AdminController extends Controller
{
    public function dashboard()
    {
        $deleteMail = Contact::whereRaw('DATEDIFF(NOW(), created_at) > 30')->delete();

        $nbMail = Contact::count();
        $nbRoses = Roses::count();
        $nbFruitiers = Fruitiers::count();

        return view('admin.dashboard', [
            'nbmail' => $nbMail,
            'nbroses' => $nbRoses,
            'nbfruitiers' => $nbFruitiers,
        ]);
    }

    public function roses()
    {
        $showRose = Roses::get();
        return view('admin.roses', [
            "roses" => $showRose,
        ]);
    }

    public function fruitier()
    {
        $showFruitier = Fruitiers::get();
        return view('admin.fruitier', [
            "fruitiers" => $showFruitier,
        ]);
    }

    public function mail()
    {
        $showMail = Contact::get();
        return view('admin.mail', [
            "mails" => $showMail,
        ]);
    }

}
