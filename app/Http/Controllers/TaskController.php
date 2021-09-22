<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Task;
use Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;

class TaskController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id(); 
        $tasks = Task::where('user', '=', $userId)->orderBy('completed')->get();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    /**
     * Display an archive of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function archive()
    {
        $userId = Auth::id(); 
        $tasks = Task::where('user', '=', $userId)->where('completed', '>', 0)->
        get();
        return view('tasks.index', ['tasks' => $tasks]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Crypt::encryptString($request->data);
        Task::insert([
            'title' => $request->title,
            'data' => $data,
            'user' => Auth::id(), 
            'completed' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/tasks');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $userId = Auth::id(); 
        return view('tasks.task', [
            'task' => Task::where('user', '=', $userId)->findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $userId = Auth::id(); 
        return view('tasks.edit', [
            'task' => Task::where('user', '=', $userId)->findOrFail($id)
        ]);
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
        $completed = 0;
        if ($request->completed == 'on'){
            $completed = 1;
        }

        $data = Crypt::encryptString($request->data);

        $userId = Auth::id(); 
        Task::where('user', '=', $userId)
            ->where('id', '=' , $id)
            ->update([
                'title' => $request->title,
                'data' => $data,
                'user' => Auth::id(), 
                'completed' => $completed,
                'updated_at' => now()
            ]);
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $userId = Auth::id(); 
        Task::where('user', '=', $userId)
            ->where('id', '=' , $id)
            ->delete();
        return redirect('/tasks');
    }
}
