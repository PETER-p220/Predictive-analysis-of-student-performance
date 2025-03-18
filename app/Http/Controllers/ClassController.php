<?php

namespace App\Http\Controllers;

use App\Models\form_1;
use App\Models\form_2;
use App\Models\form_3;
use App\Models\form_4;
use App\Models\form_1_student;
use App\Models\form_2_student;
use App\Models\form_3_student;
use App\Models\form_4_student;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function form1()
    {
        //
        return view('form_1');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function form2()
    {
        //
        return view('form_2');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function form3()
    {
        //
        return view('form_3');
    }

    /**
     * Display the specified resource.
     */
    public function form4()
    {
        //
        return view('form_4');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function form_1_students( )
    {
        //
        $userEdit=form_1_student::all();
        return view('form_1_students',compact('userEdit'));
    }

    public function form_2_students( )
    {
        //
        $userEdit=form_2_student::all();
        return view('form_2_students',compact('userEdit'));
    }public function form_3_students( )
    {
        //
        $userEdit=form_3_student::all();
        return view('form_3_students',compact('userEdit'));
    }public function form_4_students( )
    {
        //
        $userEdit=form_4_student::all();
        return view('form_4_students',compact('userEdit'));
    }
    public function store_1(Request $request){
        $user=new form_1_student;
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function store_2(Request $request){
        $user=new form_2_student;
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function store_3(Request $request){
        $user=new form_3_student;
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function store_4(Request $request){
        $user=new form_4_student;
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function update_1(Request $request,$id){
        $user=form_1_student::find($id);
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function update_2(Request $request,$id){
        $user=form_2_student::find($id);
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function update_3(Request $request,$id){
        $user=form_3_student::find($id);
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }
    public function update_4(Request $request,$id){
        $user=form_4_student::find($id);
        $user->cdn=request('cdn');
        $user->first_name=request('first_name');
        $user->surname=request('surname');
        $user->last_name=request('last_name');
        $user->save();

        return redirect('homepage');

    }

    /**
     * Update the specified resource in storage.
     */
    public function edit_form1($id)
    {
        //
        $user = form_1_student::find($id);
        return View('form_1_update',compact( 'user'));
    }

    public function edit_form2($id)
    {
        //
        $user = form_2_student::find($id);
        return View('form_2_update',compact( 'user'));
    }
    public function edit_form3($id)
    {
        //
        $user = form_3_student::find($id);
        return View('form_3_update',compact( 'user'));
    }
    public function edit_form4($id)
    {
        //
        $user = form_4_student::find($id);
        return View('form_4_update',compact( 'user'));
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete_form1(string $id)
    {
        //
        form_1_student::destroy($id);
        return redirect()->back();
    }
    public function delete_form2(string $id)
    {
        //
        form_2_student::destroy($id);
        return redirect()->back();
    }
    public function delete_form3(string $id)
    {
        //
        form_3_student::destroy($id);
        return redirect()->back();
    }
    public function delete_form4(string $id)
    {
        //
        form_4_student::destroy($id);
        return redirect()->back();
    }
    public function prediction(){
        return view('view_predictions');
    }
}
