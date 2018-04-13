<?php

namespace App\Http\Controllers;

use App\attendencModel;
use Illuminate\Http\Request;
use Validator;
use file;

class attendencController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= attendencModel::get();
        return view('attendenc.show_attendenc', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('attendenc.add_attendenc');
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
                'sid'=>'required',
                'date'=>'required',
                'roll'=>'required',
                'class'=>'required',
                'section'=>'required',
                'intime'=>'required',
                'outtime'=>'required',
                'status'=>'required'

           ]);

            if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
            }

          $data=attendencModel::create($input);
          return redirect('/attendenc')->with('success','Subject Add has been Success');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=attendencModel::findorFail($id);
         $data->delete($data);
         return redirect('/attendenc')->with('error','Delete has been Success');
    }
}
