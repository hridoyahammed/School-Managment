<?php

namespace App\Http\Controllers;

use App\markModel;
use Illuminate\Http\Request;
use Validator;
use file;

class markController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= markModel::get();
        return view('mark.mark_show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mark.mark_create'); 
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
                'suid'=>'required',
                'year'=>'required',
                'mark'=>'required',
                'stid'=>'required',
                'exid'=>'required'

           ]);
              
           if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }


         $data=markModel::create($input);
          return redirect('/mark')->with('success','Mark Add has been Success');
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
        $try= markModel::findOrFail($id);
        return view('mark.mark_edit', compact('try'));
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
        $data=markModel::findorFail($id);
        $input=$request->all();
        $data->update($input);
          return redirect('/mark')->with('success','Mark Update has been Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data=markModel::findorFail($id);
         $data->delete($data);
         return redirect('/mark')->with('error','Delete has been Success');
    }
}
