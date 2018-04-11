<?php

namespace App\Http\Controllers;

use App\subjectModel;
use Illuminate\Http\Request;
use Validator;
use file;



class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= subjectModel::get();
        return view('subject.sub_show', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subject.subject_create');
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
            'suname'=>'required',
            'fmark'=>'required',
            'class'=>'required',
            'tid'=>'required'
       ]);
          
       if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

         $data=subjectModel::create($input);
         return redirect('/subject')->with('success','Subject Add has been Success');

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
        $try= subjectModel::findOrFail($id);
        return view('subject.sub_edit', compact('try'));
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
        $data=subjectModel::findorFail($id);
        $input=$request->all();
        $data->update($input);
         return redirect('/subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=subjectModel::findorFail($id);
         $data->delete($data);
         return redirect('/subject');
    }
}
