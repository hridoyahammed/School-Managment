<?php

namespace App\Http\Controllers;

use App\tryModel;
use Illuminate\Http\Request;
use Validator;
use file;

class TryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data=tryModel::get();
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
            'age'=>'required',
            'number'=>'required|unique:try',
            'image'=> 'mimes:jpeg,jpg,png,JPG',
       ]);
          
       if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

            if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['image']=$fileName;
        }

       $data=tryModel::create($input);
       return redirect('/try');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $try= tryModel::findorFail($id);
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
        $try= tryModel::findorFail($id);
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
         $data=tryModel::findorFail($id);
         $input=$request->all();
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
        $data=tryModel::findorFail($id);
         $data->delete($data);
         return redirect('/try');
    }
}
