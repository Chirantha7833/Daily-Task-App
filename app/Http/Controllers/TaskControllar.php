<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\task;

class TaskControllar extends Controller
{
    public function store(Request $request)
    {
        $task=new \App\Models\task;

        $this->validate($request, [
            'task' => 'required|max:100|min:5',
        ]);
        $task->task = $request->task;
        $task->save();
        $data = \App\Models\task::all();
        return view('task')->with('task',$data);



    }
    public function completed($id){
        $task = \App\Models\task::find($id);
        $task->iscompleted = 1;
        $task->save();
        return redirect()->back();

    }
    public function Notcompleted($id)
    {
        $task = \App\Models\task::find($id);
        $task->iscompleted = 0;
        $task->save();
        return redirect()->back();    }

    public function remove($id){
        $task = \App\Models\task::find($id);
        $task->delete();
        return redirect()->back();    }
    public function updatetaskview($id)
    {
        $task = \App\Models\task::find($id);
        return view('updatetask')->with('taskdata',$task);
    }

    public function updatetask(request $request)
    {
        $id = $request->id;
        $task = $request->task;
        $data = \App\Models\task::find($id);
        $data->task = $task;
        $data->save();
        $data = \App\Models\task::all();

        return view('task')->with('task',$data);



    }


    }




    
