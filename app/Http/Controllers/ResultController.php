<?php

namespace App\Http\Controllers;
use App\Models\results;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    //
    public function upload(){
        if(request()->has('mycsv')){
            //$data= array_map('str_getcsv',file(request()->mycsv));
            $data= file(request()->mycsv);

            $header=$data[0];
            unset($data[0]);


            //Chunking file
            $chunk=array_chunk($data,100);

            //convert values into csv format
            foreach($chunk as $key => $chunk){
                $name="/tmp{$key}.csv";
                $path=resource_path("temp");
                file_put_contents($path.$name,$chunk);
            }
            foreach($data as $sale){
                $saleData=array_combine($header,$sale);
                results::create($saleData);
            }
            return ('Done');
           }
           return ('Job Completed');
        }
        public function store(){
            $path = resource_path('temp');
            $files=glob("$path/*.csv");
            $header=[];
    
            foreach($files as $key=>$file){
                $data=array_map('str_getcsv',file($file));
                if($key===0){
                    $header=$data[0];
                    unset($data[0]);
                }
    
            foreach($data as $sale){
                $saleData=array_combine($header,$sale);
                results::create($saleData);
            }
        }
            return 'Done';
    
        }
}
