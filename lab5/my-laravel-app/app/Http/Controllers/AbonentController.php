<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAbonentRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Abonent;
use Illuminate\Support\Facades\Auth;

class AbonentController extends Controller
{
    public function __construct(){
        $this->authorizeResource(Abonent::class);
    }
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
    public function store(StoreAbonentRequest $request): RedirectResponse
    {
        $validated = $request->validated();
        $abonent = Abonent::create([
           'number'=>$validated['number'] ,
            'home_adress'=>$validated['home_adress'],
            'owner'=>$validated['owner'],
            'status_score'=>$validated['status_score'],
            'creator_user_id' => Auth::user()->id
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
    public function edit(Abonent $abonent)
    {
        return view('abonents.edit',['abonent'=>$abonent]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreAbonentRequest $request, Abonent $abonent): RedirectResponse
    {
        $validated = $request->validated();
        $abonent->update([
            'number'=>$validated['number'] ,
            'home_adress'=>$validated['home_adress'],
            'owner'=>$validated['owner'],
            'status_score'=>$validated['status_score'],
        ]);
        return \redirect(route('abonents.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abonent $abonent): RedirectResponse
    {
        $abonent->delete();
        return \redirect(route('abonents.index'));
    }
}
