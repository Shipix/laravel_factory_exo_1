<?php

namespace App\Http\Controllers;

use App\Models\TypeFormation;
use Illuminate\Http\Request;

class TypeFormationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datatypeform=TypeFormation::all();
        return view('typeform',compact('datatypeform'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function show(TypeFormation $typeFormation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeFormation $typeFormation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeFormation $typeFormation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TypeFormation  $typeFormation
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeFormation $typeFormation)
    {
        //
    }
}
