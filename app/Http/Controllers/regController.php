<?php

namespace App\Http\Controllers;

use App\regModel;
use Illuminate\Http\Request;
use Validator;
use file;
use Illuminate\Pagination\Paginator;

class regController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data=regModel::paginate(1);;
      return view('try.student', compact('data')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('try.try_create');    }

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
            'name'=>'required',
            'sid'=>'required',
            'fname'=>'required',
            'mname'=>'required',
            'class'=>'required',
            'section'=>'required',
            'session'=>'required',
            'roll'=>'required',
            'reg'=>'required',
            'shift'=>'required',
            'phone'=>'required|unique:reg',
            'dob'=>'required',
            'gnid'=>'required',
            'blood'=>'required',
            'address'=>'required',
            'gender'=>'required',
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
            $file->move('public/files/student',$fileName);
            $input['image']=$fileName;
        }

       $data=regModel::create($input);
       return redirect('/try')->with('success','Registration has been Success');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminat+e\Http\Response
     */
    public function show($id)
    {
        $try= regModel::findorFail($id);
        return view('try.show', compact('try'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $try= regModel::findOrFail($id);
        return view('try.try_edit', compact('try'));
        
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
         $data=regModel::findorFail($id);
         $input=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['image']=$fileName;
        }


         $data->update($input);
         return redirect('/try');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=regModel::findorFail($id);
         $data->delete($data);
         return redirect('/try');
    }
}
