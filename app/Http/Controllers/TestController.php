<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller {

    public function index(){
        $test = Test::orderBy('completed')->get();
        return view('/index')->with('test', $test);
    }


    public function create(){
        return view('todo.create');
    }


    public function store(Request $request){

        $request->validate([
        'name' => 'required|max:255',
        'title' => 'required',
        'email' => 'required|unique',
        'contact_num' => 'required'
        ]);

        $test = Test::create([
        'name' => $request->input('name'),
        'title' => $request->input('title'),
        'email' => $request->input('email'),
        'contact_num' => $request->input('contact_num')
    ]);
        return redirect('/dashboard');

    }

    public function edit($id) {

        $test = Test::find($id)->first();
        return view('todo.edit')->with(['id' => $id, 'test' => $test]);
    }


    public function update(Request $request) {

        $test = Test::where('id')
        ->update([
        'name' => $request->input('name'),
        'title' => $request->input('title'),
        'email' => $request->input('email'),
        'contact_num' => $request->input('contact_num')
        ]);

        return redirect('/dashboard');
    }

    public function delete($id) {
        $test = Test::find($id);
        $test->delete();
        return redirect()->back()->with('success', "Todo deleted successfully");
    }

}