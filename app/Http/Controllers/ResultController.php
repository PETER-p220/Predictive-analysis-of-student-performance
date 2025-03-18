<?php
namespace App\Http\Controllers;
use App\Models\results;
use Illuminate\Http\Request;
class ResultController extends Controller
{
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
