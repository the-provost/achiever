<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\User;
use App\Goal;
use Auth;

class GoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $user_id = Auth::id();
    // }
    
    public function index()
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
        // $user = auth('api')->user();
        // print($request->user());
        // return Goal::create([
        //     'title'=>$request['title'],
        //     'description'=>$request['description'],
        //     'user_id'=> $user,
        //     'planned_start'=>$request['plannedstart'],
        //     'planned_end'=>$request['plannedterm'],
        //     'term'=>$request['term'],
        //     'priority'=>$request['priority']
        // ]);

        // I tried so hard and got so far, in the end, it doesnt even matter. i had to fall, to lose it all but in the end it doesnt even matter 
        // cuz i used normal controller instead of api controller to be able to get user id. if anyone knows how to get userid in api controller, please ping me. jesil@jesilsnotes.com
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
