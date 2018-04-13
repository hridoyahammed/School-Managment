<?php

namespace App\Http\Controllers;

use App\teacherModel;
use Illuminate\Http\Request;
use Validator;
use file;

class teacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= teacherModel::get();
        return view('teacher.show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.add_teacher');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $input=$request->all();

          $validator=Validator::make($request->all(),[
                'tid'=>'required',
                'name'=>'required',
                'nid'=>'required',
                'dob'=>'required',
                'gender'=>'required',
                'phone'=>'required',
                'rel'=>'required',
                'address'=>'required',
                'image'=> 'required|mimes:jpeg,jpg,png,JPG'

           ]);
              
           if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }

                if ($request->hasFile('image')) {
                $file=$request->file('image');
                $fileType=$file->getClientOriginalExtension();
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                /*$fileName=$file->getClientOriginalName();*/
                $file->move('public/files/teacher',$fileName);
                $input['image']=$fileName;
            }

         $data=teacherModel::create($input);
          return redirect('/teacher')->with('success','Subject Add has been Success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $try= teacherModel::findOrFail($id);
        return view('teacher.edit', compact('try'));
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
        $data=teacherModel::findorFail($id);
        $input=$request->all();
        if ($request->hasFile('image')) {
                $file=$request->file('image');
                $fileType=$file->getClientOriginalExtension();
                $fileName=rand(1,1000).date('dmyhis').".".$fileType;
                /*$fileName=$file->getClientOriginalName();*/
                $file->move('public/files/teacher',$fileName);
                $input['image']=$fileName;
            }
        $data->update($input);
         return redirect('/teacher')->with('success','Update has been Success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=teacherModel::findorFail($id);
         $data->delete($data);
         return redirect('/teacher')->with('error','Delete has been Success');
    }
}
