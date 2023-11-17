<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ruangan;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index(){
        $ruangan = Ruangan::all();
        $user = User::all();
        return view("ruangan.index", compact("user", "ruangan"));
    }

    public function store(Request $request) {
        $input = $request->all();
        $input['nomor_ruangan'] = 'Ruangan'.''.random_int(100,999);
        Ruangan::create($input);
        return redirect('/ruangan');
    }

    public function show($id){
        $ruangan = Ruangan::find($id);
        return view('ruangan.detail', compact('ruangan'));
    }

    public function edit($id){
        $ruangan = Ruangan::find($id);
        $user = User::all();
        return view('ruangan.edit', compact('ruangan', 'user'));
    }
    
    public function update(Request $request, $id){
       $ruangan = Ruangan::find($id);
       $data = $request->all();
       $ruangan->update($data);
       return redirect('/ruangan');
    }

    public function destroy($id){
        $ruangan = Ruangan::find($id);
        $ruangan->delete();
        return back();
    }

}
   
