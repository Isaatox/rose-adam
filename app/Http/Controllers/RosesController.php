<?php

namespace App\Http\Controllers;

use App\Models\Roses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Storage;

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
            'denomination' => 'required',
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
            'description' => 'required',
            'recompenses' => 'required',
            'categorie' => 'required',
            'parfume' => 'required',
            'tige' => 'required',
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

        Storage::disk('public')->delete('roseimg/'.$rose->roseimg);

        $rose->roseimg = null;

        return redirect('admin/roses/new-3');
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
            'denomination' => 'required',
            'description' => 'required',
            'recompenses' => 'required',
            'prix' => 'required',
        ]);

        $id = request("id");
        $rose = Roses::find($id);
        $rose->name = $request->name;
        $rose->denomination = $request->denomination;
        $rose->description = $request->description;
        $rose->recompenses = $request->recompenses;
        $rose->prix = $request->prix;
        $rose->categorie = $request->categorie;
        $rose->parfume = $request->parfume;
        $rose->tige = $request->tige;
        $rose->save();
        // return Redirect::to('admin/question');
        return Redirect::to('admin/roses')->with('success', 'Rose ' . $rose->name . ' modifiée');
    }

    public function delete()
    {
        $id = request("id");

        $rose = Roses::find($id);
        Storage::disk('public')->delete('roseimg/'.$rose->roseimg);

        Roses::where('id', $id)
            ->delete();

            return redirect('admin/roses')->with('error','Rose  supprimée');
    }

}
