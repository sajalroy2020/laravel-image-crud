<?php

namespace App\Http\Controllers;

use App\Models\StudentInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class StudentInfoController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = StudentInfo::all();
        return view('index', compact('student'));
    }

    /**
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:20',
            'roll' => 'required',
            'deperment' => 'required|max:15',
            'image' => 'required',
        ];

        $this->validate($request, $rules);
        $student = new StudentInfo;
        $student->name = $request->input('name');
        $student->roll = $request->input('roll');
        $student->deperment = $request->input('deperment');
        if($request->hasFile('image')){

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }
        $student->save();
        Session::flash('msg');
        return redirect()->back()->with('status','student data added sucessfully');
    }

    /**
     *
     * @param  \App\Models\StudentInfo  $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = StudentInfo::find($id);
        return view('edit', compact('student'));
    }
    

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StudentInfo  $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = StudentInfo::find($id);
        $student->name = $request->input('name');
        $student->roll = $request->input('roll');
        $student->deperment = $request->input('deperment');
        if($request->hasFile('image'))
        {
            $destination = 'uploads/students/'.$student->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/students/', $filename);
            $student->image = $filename;
        }
        $student->update();
        return redirect('/')->with('status','student data Update sucessfully');
    }

    /**
     *
     * @param  \App\Models\StudentInfo  $studentInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = StudentInfo::find($id);
        $destination = 'uploads/students/'.$student->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $student->delete();
        return redirect('/')->with('status','student data Deleted sucessfully');

    }
}
