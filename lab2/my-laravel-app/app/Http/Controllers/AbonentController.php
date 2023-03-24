<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Abonent;

class AbonentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $abonents = Abonent::all();
        return view('abonents.index',['abonents'=>$abonents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('abonents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $abonent = Abonent::create([
           'number'=>$request->input('number') ,
            'home_adress'=>$request->input('home_adress'),
            'owner'=>$request->input('owner'),
            'status_score'=>$request->input('status_score'),
        ]);
        return \redirect(route('abonents.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $abonent = Abonent::find($id);
        return view('abonents.edit',['abonent'=>$abonent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $abonent = Abonent::find($id);
        $abonent->update([
            'number'=>$request->input('number') ,
            'home_adress'=>$request->input('home_adress'),
            'owner'=>$request->input('owner'),
            'status_score'=>$request->input('status_score'),
        ]);
        return \redirect(route('abonents.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Abonent::destroy($id);
        return \redirect(route('abonents.index'));
    }
}
