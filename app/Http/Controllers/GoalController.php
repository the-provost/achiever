<?php

namespace App\Http\Controllers;

use App\Goal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;

class GoalController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request,[

            "asset_tag" => ["required"],
            "assoc_key" => ["required",],
            "name" => ["required","string"],
            "category" => ["required",'string'],
            "manufacturer" => ["required",'string'],
            "model" => ["required",'string'],
            "desc" => ["required",'string'],
            "date_induc" => ["required",'date'],
            "quantity" => ["required",'numeric'],
            "proj_id" => ["required",'numeric'],
            "store_id" => ["required",'numeric'],
            "inducted_by" => ["required",'numeric'],
            "approved_by" => ["required",'numeric']
        ]);

        Goal::create([
            "asset_tag" => $request->get('asset_tag'),
            "assoc_key" => $request->get('assoc_key'),
            "name" => $request->get('name'),
            "category" => $request->get('category'),
            "manufacturer" => $request->get('manufacturer'),
            "model" => $request->get('model'),
            "desc" => $request->get('desc'),
            "date_induc" => $request->get('date_induc'),
            "quantity" => $request->get('quantity'),
            "project_id" => $request->get('proj_id'),
            "store_id" => $request->get('store_id'),
            "inducted_by" => $request->get('inducted_by'),
            "approved_by" => $request->get('approved_by')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Goal $goal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function edit(Goal $goal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Goal $goal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Goal  $goal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Goal $goal)
    {
        //
    }
}
