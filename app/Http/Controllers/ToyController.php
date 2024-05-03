<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('toy.index', ['toys' => Toy::all()]);
    }

    
    public function create()
    {
        return view('toy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Toy::create($request -> all());
        return redirect(route('toy.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Toy $toy)
    {
        return view('toy.show') -> with('toy', $toy);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Toy $toy)
    {
        return view ('toy.edit') -> with ('toy', $toy);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Toy $toy)
    {
        $toy ->name = $request -> name;
        $toy ->price = $request -> price;
        $toy ->description = $request -> description;
        
        $toy -> save();
        return redirect(route('toy.index'));

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Toy $toy)
    {
        $toy -> delete();
        return redirect(route('toy.index'))->with('sucesso', 'brinquedo deletado com sucesso' );

    }
}
