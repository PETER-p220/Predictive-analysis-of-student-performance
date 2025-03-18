<?php

namespace App\Http\Controllers\auth;
use App\Models\form_1;
use App\Models\form_2;
use App\Models\form_3;
use App\Models\form_4;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view('auth.admin-login');
    }
    public function upload(){
        return view('upload');
    }
    public function store(Request $request){
        $request->validate([
            'results_file' => 'required|file|mimes:csv,txt|max:2048' // max 2MB
        ]);
        if(request()->has('results_file')){
            $data= array_map('str_getcsv',file(request()->results_file));
            $header=$data[0];
            unset($data[0]);

            foreach($data as $value){
                //dd(array_combine($header,$value));
                $result=array_combine($header,$value);
                $exists = form_1::where($result)->exists();
                if(!$exists){
                    form_1::updateOrCreate($result);
                }
            }
            return redirect()->route('homepage');
        }
        return ('please upload file');
    }
}
