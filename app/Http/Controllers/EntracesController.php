<?php

namespace App\Http\Controllers;

use App\entraces;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EntracesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entraces= DB::table('entraces')->paginate(2);
        return view ('entraces.index',compact('entraces'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entraces.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        entraces::create($request->all());
        return redirect()->route('entraces.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\entraces  $entraces
     * @return \Illuminate\Http\Response
     */
    public function show(entraces $entrace)
    {
        return view('entraces.show', compact('entrace'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\entraces  $entraces
     * @return \Illuminate\Http\Response
     */
    public function edit(entraces $entrace)
    {
        return view('entraces.edit', compact('entrace'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\entraces  $entraces
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, entraces $entrace)
    {
        $request->validate(
            [
                'price'=>'required',
                'hourEntrace'=>'required',
                'salas_id'=>'required'
            ]
        );
        $entrace->update($request->all());
        return redirect()->route('entraces.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\entraces  $entraces
     * @return \Illuminate\Http\Response
     */
    public function destroy(entraces $entrace)
    {
        $entrace->delete();
        return redirect()->route('entraces.index');
    }
}
