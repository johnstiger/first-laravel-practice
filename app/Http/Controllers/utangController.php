<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\utang;

class utangController extends Controller
{
    public function create()
    {
        return view('Utang.create');
    }
    public function store(Request $request)
    {
        $mangutang = new utang();
        $mangutang->name = $request->name;
        $mangutang->amount = $request->amount;
        $mangutang->save();
    }
    public function index(){
        $utangs = utang::all();
        return view ('Utang.index', compact('utangs'));
    }
    public function about(){
        return view('about');
    }
    public function services(){
        return view('services');
    }
    public function edit(utang $utang){
        return view('Utang.edit',compact('utang'));
    }
}
