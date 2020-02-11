<?php

namespace App\Http\Controllers;

use App\GoalStatus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Goal;

class GoalStatusController extends Controller
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

        GoalStatus::create([
            "user_id" => $request->get('user_id'),
            "goal_id" => $request->get('goal_id'),
            "status" => $request->get('status')

        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GoalStatus  $goalStatus
     * @return \Illuminate\Http\Response
     */
    public function show(GoalStatus $goalStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\GoalStatus  $goalStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(GoalStatus $goalStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GoalStatus  $goalStatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GoalStatus $goalStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\GoalStatus  $goalStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(GoalStatus $goalStatus)
    {
        //
    }
}
