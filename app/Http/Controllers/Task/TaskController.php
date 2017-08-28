<?php

namespace App\Http\Controllers\Task;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;

class TaskController extends Controller
{
    public function __construct() {
        $this->task = new Task;
    }
    public function showAddTask(){
        return view("tasks.addTasks");
    }
    public function showAll(){
        $result = $this->task->all();
        if($result){
            return view('Tasks.taskManager', ['tasks' => $result]);
        }
    }
    
    public function addTask(Request $request){
        $fileNames = $request->arquivos;
        $join_names ="";
        foreach($fileNames as $names){
            $join_names .= $names . ", ";            
         }
        
        
        //dd($join_names);
        $result =  $this->task->create([
            "name" => $request->input("task"),
            "priority" => $request->input("priority"),
            "description" => $request->input("description"),            
            "user_id" => auth()->user()->id ,
            "archive_names" => $join_names
        ]);
        if($result){
            return redirect()->route("task.show");
        }
    }
    public function showUpdate($id)
    {
        $result = $this->task->find($id);
        return view("Tasks.addTasks", ['update' => $result]);
    }   
    
    public function updateTask(Request $request){
        $update = $this->task->find( $request->input('id') );
        
        $result = $update->update([
            "name" => $request->input("task"),
            "priority" => $request->input("priority"),
            "description" => $request->input("description"),            
            "user_id" => auth()->user()->id ,
            "archive_names" =>  $request->input("files"),
        ]);
        if($result){
            return redirect()->route("task.show");
        }
    }
    
    public function delete(Request $request, $id){
        $del = $this->task->find($id);
        if($del){
            $del->delete();
            return redirect()->route("task.show");
        }
    }
}
