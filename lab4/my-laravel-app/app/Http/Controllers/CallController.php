<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCallRequest;
use App\Models\Call;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Abonent;
use Illuminate\Support\Facades\Auth;

class CallController extends Controller
{
    public function __construct(){
        $this->authorizeResource(Call::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $calls = Call::all();
        return view('calls.index',['calls'=>$calls]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $abonent_list = Abonent::all();
        return view('calls.create',['abonent_list' => $abonent_list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCallRequest $request):RedirectResponse
    {
        $validated = $request->validated();
        $call = Call::create([
           'number_call' => $validated['number_call'],
            "duration" => $validated['duration'],
            "pay" => $validated['pay'],
            "abonent_id" =>$validated['abonent_id'],
            "implementation_time" => $validated['implementation_time'],
            'creator_user_id' => Auth::user()->id,
        ]);


        return \redirect(route('calls.index'));
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
    public function edit(Call $call)
    {
        $abonent_list = Abonent::all();
        return view('calls.edit',['call'=>$call,'abonent_list'=>$abonent_list]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreCallRequest $request, Call $call): RedirectResponse
    {
        $validated = $request->validated();
        $call->update([
            'number_call' => $validated['number_call'],
            "duration" => $validated['duration'],
            "pay" => $validated['pay'],
            "abonent_id" =>$validated['abonent_id'],
            "implementation_time" => $validated['implementation_time'],

        ]);
        return \redirect(route('calls.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Call $call): RedirectResponse
    {
        $call->delete();
        return  \redirect(route('calls.index'));
    }
}
