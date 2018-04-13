<?php

namespace App\Http\Controllers;

use App\examModel;
use Illuminate\Http\Request;
use Validator;
use file;


class examController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= examModel::get();
        return view('exam.show_exam', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('exam.exam_create');
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
            'examid'=>'required',
            'heldon'=>'required',
            'year'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }
            $data = examModel::create($input);
             return redirect('/exam')->with('success','Subject Add has been Success');
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
        $try= examModel::findOrFail($id);
        return view('exam.edit_exam', compact('try'));
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
        $data=examModel::findorFail($id);
        $input=$request->all();
        $data->update($input);
         return redirect('/exam')->with('success','Update has been Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=examModel::findorFail($id);
         $data->delete($data);
         return redirect('/exam')->with('error','Delete has been Success');
    }
}
