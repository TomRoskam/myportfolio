<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blok1;
use App\blok2;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class block1Controller extends Controller
{
    public function index()
    {
        $block1 = \App\blok1::all();
        $block2 = \App\blok2::all();
        return view('block1.index', compact('block1', 'block2'));
    }

    public function create()
    {
        $block1 = \App\blok1::all();
        $block2 = \App\blok2::all();
        return view('block1.create', compact('block1', 'block2'));
    }

    public function edit($id)
    {
        $block1 = \App\blok1::findOrFail($id);
        $block2 = \App\blok2::all();
        return view('block1.edit', compact('block1', 'block2'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'toets' => 'required|string',
            'cijfer' => 'required|numeric',
            'ECwaarde' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $block1  = new blok1();

        $block1->toets = request('toets');
        $block1->cijfer = request('cijfer');
        $block1->ECwaarde = request('ECwaarde');

        $block1->save();

        return redirect('/block1');
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'toets' => 'required|string',
            'cijfer' => 'required|numeric',
            'ECwaarde' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $block1 = \App\blok1::findOrFail($id);

        $block1->toets = request('toets');
        $block1->cijfer = request('cijfer');
        $block1->ECwaarde = request('ECwaarde');

        $block1->save();

        return redirect('/block1');
    }

    public function destroy($id)
    {
        \App\blok1::findOrFail($id)->delete();
        return redirect('/block1');
    }

    public function show($id) {
        return view('errors.404');
    }
}
