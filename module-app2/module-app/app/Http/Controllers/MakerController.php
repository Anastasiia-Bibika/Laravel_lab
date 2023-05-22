<?php

namespace App\Http\Controllers;

use App\Models\Maker;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $makers = Maker::all();
        return view('makers.index',['makers'=>$makers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $maker = Maker::create([
            'brand'=>$request->input('brand') ,
            'country'=>$request->input('country'),
            'number'=>$request->input('number'),
            'email'=>$request->input('email'),
        ]);
        return \redirect(route('maker.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Maker::destroy($id);
        return \redirect(route('makers.index'));
    }
}
