<?php

namespace App\Http\Controllers;

use App\Models\TaskAssign;
use Illuminate\Http\Request;

class TaskAssignController extends Controller
{
    public function task_assign(){
        return view('admin.TaskAssign.create');
    }
    public function task_store(Request $request){
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'priority' => 'required',
            'due_date' => 'required',
            'status' => 'required',
        ]);

       try{
        TaskAssign::create([
            'title' => $request->title,
            'description' => $request->description,
            'priority' => $request->priority,
            'due_date' => $request->due_date,
            'status' => $request->status,
        ]);
       }catch(\Exception $e){
        return back()->with('error', $e->getMessage());
       }
    }
}
