<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Todos;


class TodosController extends Controller
{
    public function index()
    {
        $todos=Todos::all();
        return view('todos.index',compact('todos'));
    }
    public function welcome()
    {
       
        return view('welcome');
    }
    public function show($todoId)
    {
        $todo=Todos::find($todoId);
        return view('todos.show',compact('todo'));
    }

    public function create(){
        return view('todos.create');

    }

    public function store(Request $request){
         //dd($request);
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
           
           ]);

           $todos = new Todos();
           $todos->name = $request->name;
           $todos->description = $request->description;
           $todos->completed = false;

           $todos->save();
        //    session()->flash('success', 'Task added successfully!');


        return redirect(route('todos'))->with('success', 'Task added Successfully');;

    }

    
    public function edit($id){
        $todo = Todos::find($id);
        return view('todos.edit',compact('todo'));

    }
    public function update(Request $request, $id){
       
        $this->validate($request,[
            'name' => 'required',
            'description' => 'required',
           
           ]);
           $todo = Todos::find($id);

           $todo->name = $request->name;
           $todo->description = $request->description;
           $todo->completed = false;

           $todo->save();
           return redirect(route('todos'))->with('success', 'Task updated Successfully');;


    }
    public function destroy($id)
    {
        $todo = Todos::find($id);

      $todo->delete();

      return redirect(route('todos'))->with('success', 'Task deleted Successfully');;

    }

    
    

}
