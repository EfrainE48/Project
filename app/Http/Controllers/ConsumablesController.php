<?php

namespace App\Http\Controllers;

use App\consumables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsumablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consumables= DB::table('consumables')->paginate (2);//select*from cine.movies;
        return view ('consumables.index',compact('consumables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('consumables.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        consumables::create($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\consumables  $consumables
     * @return \Illuminate\Http\Response
     */
    public function show(consumables $consumable)
    {
        return view('consumables.show', compact('consumable'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\consumables  $consumables
     * @return \Illuminate\Http\Response
     */
    public function edit(consumables $consumable)
    {
        return view('consumables.edit', compact('consumable'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\consumables  $consumables
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consumables $consumable)
    {
         $request->validate(
            [
                'name'=>'required',
                'price'=>'required',
                'quanty'=>'required'
            ]
        );
        $consumable->update($request->all());
        return redirect()->route('consumables.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\consumables  $consumables
     * @return \Illuminate\Http\Response
     */
    public function destroy(consumables $consumable)
    {
        $consumable->delete();
        return redirect()->route('consumables.index');
    }  
    public function viewTable()
    {
        $consumables= DB::table('consumables')->paginate(10);
        return view('consumables.viewTable', compact('consumables'));
    }

}
