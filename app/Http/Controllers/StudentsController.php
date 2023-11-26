<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function index(){
        $data = Students::all();
        return view('student', compact('data'));
    }

    public function add(){
        return view('add');
    }

    public function insert(Request $request){
        // dd($request->all());
        Students::create($request->all());
        return redirect()->route('students')->with('success', 'Student successfully add');
    }

    public function getById($id){
        $data = Students::find($id);
        // dd($data);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id) {
        $data = Students::find($id);
        $data->update($request->all());
        return redirect()->route('students')->with('success', 'Student successfully edited');
    }

    public function delete($id){
        $data = Students::find($id);
        $data->delete();
        return redirect()->route('students')->with('success', 'Student successfully deleted');
    }
}
