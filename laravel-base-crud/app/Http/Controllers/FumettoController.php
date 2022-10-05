<?php

namespace App\Http\Controllers;

use App\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Fumetto::all();
        return view('fumetti.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetti.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=> 'required|max:255',
                'description'=> 'required|max:255',
                'thumb'=> 'required|max:255|url',
                'price'=> 'required|max:10',
                'series'=> 'required|max:255',
                'sale_date'=> 'required',
                'type'=> 'required|max:255',
            ]
        );

        $data = $request->all();
        $newComic = new Fumetto();
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route('fumetti.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singoloFumetto = Fumetto::findOrFail($id);
        return view('fumetti.show', compact('singoloFumetto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singoloFumetto = Fumetto::find($id);
        if($singoloFumetto) {
            return view('fumetti.edit', compact('singoloFumetto'));
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $singoloFumetto = Fumetto::find($id);
        $request->validate(
            [
                'title'=> 'required|max:255',
                'description'=> 'required|max:255',
                'thumb'=> 'required|max:255|url',
                'price'=> 'required|max:10',
                'series'=> 'required|max:255',
                'sale_date'=> 'required',
                'type'=> 'required|max:255',
            ]
        );
        $data = $request->all();
        $singoloFumetto->update($data);
        $singoloFumetto->save();

        return redirect()->route('fumetti.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $singoloFumetto = Fumetto::find($id);
        if($singoloFumetto) {
            $singoloFumetto->delete();
            return redirect()->route('fumetti.index');
        } else {
            abort(404);
        }
    }
}
