<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
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
    public function store(StoreTaskRequest $request)
    {
        $task = new Task;
        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();

        return redirect('/tasks');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('tasks.show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::find($id);
        return view('tasks.edit', ['task' => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, $id)
    {
        $task = Task::find($id);
        $task->title = $request->title;
        $task->body = $request->body;

        $task->save();
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
        
    }
}
