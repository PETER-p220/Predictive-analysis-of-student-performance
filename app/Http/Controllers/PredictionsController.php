<?php

namespace App\Http\Controllers;

use App\Models\form_1_prediction;
use App\Models\form_1;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class PredictionsController extends Controller
{
    public function index(){
        $predictions=form_1_prediction::all();
        return Http::get('http://127.0.0.1:8000/',compact('predictions'));
    }
    public function form1Edit()
{
    $filePath = 'C:/Users/Admin/myproject/student_predictions.csv';

    if (!file_exists($filePath)) {
        abort(404, 'File not found');
    }

    // Parse CSV and ensure each row has the correct number of columns
    $predictions = [];
    foreach (file($filePath) as $line) {
        $row = str_getcsv($line);

        // Ensure row has at least 12 columns (fill missing values with empty strings)
        if (count($row) >= 12) {
            $predictions[] = array_pad($row, 12, '');
        }
    }

    return view('form_1_profile', compact('predictions'));
}
public function showStudentProfile($id)
{
    $filePath = 'C:/Users/Admin/myproject/student_predictions.csv';

    if (!file_exists($filePath)) {
        abort(404, 'File not found');
    }

    // Parse the CSV file
    $predictions = [];
    foreach (file($filePath) as $line) {
        $row = str_getcsv($line);
        if (count($row) >= 12) {
            $predictions[] = array_pad($row, 12, '');
        }
    }

    // Check if the student exists
    if (!isset($predictions[$id])) {
        abort(404, 'Student not found');
    }

    $student = $predictions[$id];

    return view('student_profile', compact('student'));
}

}
