<?php

namespace App\Http\Controllers;
use App\Models\Teacher;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = Teacher::all();

        return view('curriculums.teachers.index', compact('index'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //except
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = $request->validate([
            'nip'       =>  'required|unique:teachers|numeric|digits:18',
            'code'      =>  'required|unique:teachers|max:4',
            'name'      =>  'required',
            'status'    =>  'required'
        ]);

        $a = Teacher::create($store);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //except
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        return view('curriculums.teachers.edit', compact('teacher'));
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
        $this->validate($request, [
            'nip'       =>  "required|unique:teachers,nip,$id|numeric|max:18",
            'code'      =>  "required|unique:teachers,code,$id|string|max:4", 
            'name'      =>  'required',
            'status'    =>  'required'
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->nip = $request->nip;
        $teacher->code = $request->code;
        $teacher->name = $request->name;
        $teacher->status = $request->status;
        $teacher->save();

        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        $a = $teacher->delete();

        return back();
    }
}