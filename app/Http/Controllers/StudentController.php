<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\student;
class StudentController extends Controller
{
    //
    public function index()
    {
        return view('upload');
    }
    public function dashboard(){
        return view('dashboard-analysis');
    }
    public function reports(){
        return view('reports');
    }
    public function settings(){
        return view('settings');
    }
    // Upload student results
    public function uploadResults(Request $request)
    {
        $validated = $request->validate([
            'results_file' => 'required|file|mimes:csv,txt,xlsx',
        ]);

        // Handle file upload and save results to DB
        $path = $request->file('results_file')->storeAs('results', 'student_results.csv');

        return back()->with('message', 'Results uploaded successfully!');
    }
    public function getPredictions()
    {


        return view('predictions');
    }
    public function view(){
        return view('view_predictions');
    }

}
