<?php

namespace App\Http\Controllers;

use App\Goal;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
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
    public function index(Request $request)
    {
        
        $task = $request->get('id');
        $tasks = Task::where('type', 'Task')->where('task_id',$task )->get();
        // $tasks = Task::where('type', 'Task')->get();
        // $goals=DB::table('goals')->where('type', 'Goal')->get();
        return $tasks;
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

            "term" => ["required","string"],
            "description" => ["required","string"],
            "title" => ["required","string"]

        ]);

        Task::create([
            "user_id" => Auth::id(),
            "title" => $request->get('title'),
            "description" => $request->get('description'),
            "planned_start" => $request->get('plannedstart'),
            "planned_end" => $request->get('plannedend'),
            "term" => $request->get('term'),
            "priority" => $request->get('priority'),
            "type"=> "Task",
            "task_id"=>"1"
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $goal
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        // $task = $request->get('id');
        // $tasks = Task::where('type', 'Task')->where('task_id',$task )->get();
        // // $goals=DB::table('goals')->where('type', 'Goal')->get();
        // return $tasks;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        //
    }
}
