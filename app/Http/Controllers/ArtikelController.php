<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    //
    public function create(){
        return view('layouts.artikel.form');
    }

    public function store(Request $request){
        //dd($request->all());
        $new_artikel = ArtikelModel::save($request->all());

        return redirect('/artikel');
    }

    public function index() {
        $artikel = ArtikelModel::get_all();
        //dd($items);
        return view('layouts.artikel.index', compact('artikel'));
    }

    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('layouts.artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view ('layouts.artikel.edit', compact ('artikel'));
    }

    public function update($id, Request $request) {
        $artikel = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }

    public function destroy($id) {
        $deleted = ArtikelModel::destroy($id);

        return redirect('/artikel');
    }
}
