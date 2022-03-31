<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::orderBy('completed')->get();
        return view('todo.index')->with(['todos' =>$todos]);
    }

    public function create(){
        return view('todo.create');
    }

    public function upload(Request $request){
        $request->validate([
            'title' => 'required|max:255',
        ]);
        $todo = $request->title;
        Todo::create(['title' => $todo]);
        return redirect()->back()->with('success', "Todo Created Successfully");

        // To save or store inside the database
         // $todo = new Todo;
            // $todo->name = $request->input('name');
            // $todo->title = $request->input('title');
            // $todo->email = $request->input('email');
            // $todo->save();

            // $todo = Todo::create([
            //     'name' => $request->input('name'),
            //     'title' => $request->input('title'),
            //     'email' => $request->input('email')
            // ]);

            // return redirect('/index');
    
    }

    public function edit($id){

        // To edit 
        // $todo= Todo::find($id)->first();
        // return view('todo.edit')->with(['id' => $id, 'todo'=> $todo]); 

        $todo= Todo::find($id);
        return view('todo.edit')->with(['id' => $id, 'todo'=> $todo]); 
    }

     public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);

        $updateTodo = Todo::find($request->id);
        $updateTodo->update(['title' => $request->title]);
        return redirect('/index')->with('success', "Todo Updated Successfully");
        

        // To update and save inside the database
            // $todo = Todo::where('id', $id)
            // ->update([
            //     'name' => $request->input('name'),
            //     'title' => $request->input('title'),
            //     'email' => $request->input('email')
            // ]);

            // return redirect('/index');
     }

     public function completed($id){
        $todo = Todo::find($id);
        if ($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', "Todo marked incomplete");
        } else{
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', "Todo marked as complete");
        }

     }

     public function delete($id){
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()->back()->with('success', "Todo deleted successfully");

     }


}
