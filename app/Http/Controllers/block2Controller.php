<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blok1;
use App\blok2;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class block2Controller extends Controller
{
    public function index()
    {
        $block1 = \App\blok1::all();
        $block2 = \App\blok2::all();
        return view('block2.index', compact('block1', 'block2'));
    }

    public function create()
    {
            $block1 = \App\blok1::all();
            $block2 = \App\blok2::all();
            return view('block2.create', compact('block1', 'block2'));
    }

    public function edit($id)
    {
            $block1 = \App\blok1::all();
            $block2 = \App\blok2::findOrFail($id);
            return view('block2.edit', compact('block1', 'block2'));
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

            $block2  = new blok2();

            $block2->toets = request('toets');
            $block2->cijfer = request('cijfer');
            $block2->ECwaarde = request('ECwaarde');

            $block2->save();

            return redirect('/block2');
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

            $block2 = \App\blok2::findOrFail($id);

            $block2->toets = request('toets');
            $block2->cijfer = request('cijfer');
            $block2->ECwaarde = request('ECwaarde');

            $block2->save();

            return redirect('/block2');
    }

    public function destroy($id)
    {
            \App\blok2::findOrFail($id)->delete();
            return redirect('/block2');
    }

    public function show($id) {
        return view('errors.404');
    }
}
