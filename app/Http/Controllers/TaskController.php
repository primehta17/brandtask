<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::orderBy('id', 'asc')->get();

        $statuses = [
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];

        return view('index', compact('tasks', 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $statuses = [
            [
                'label' => 'Todo',
                'value' => 'Todo',
            ],
            [
                'label' => 'Done',
                'value' => 'Done',
            ]
        ];
        return view('create', compact('statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        $task = new Task();
        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->save();
        return redirect()->route('index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('index');
    }
}
