<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Doctor_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor = DB::table('doctors')->get();
       return view('front.DoctorsForm',['doctors'=>$doctor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('doctors')->insert([
            'name'=>$request->name,
            'city'=>$request->city,
            'Experty'=>$request->Experty,
            'ContactNumber'=>$request->ContactNumber,
            'Email'=>$request->email,
            'password'=>$request->password,

        ]);
        return redirect(route('index'))->with('status','doctor Added');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $doctor=DB::table('doctors')->find($id);
        return view('front.editform',['doctor'=>$doctor]);
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
        DB::table('doctors')->where('id',$id)->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'Experty'=>$request->Experty,
            'ContactNumber'=>$request->ContactNumber,
            'Email'=>$request->email,
            'password'=>$request->password,

        ]);
        return redirect(route('index'))->with('status','doctor updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('doctors')->where('id',$id)->delete();
        return redirect(route('index'))->with('status','doctor deleted');
    }
}
