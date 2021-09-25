<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use PDF;

class EmployeeController extends Controller
{
    /*
    * Return index view
    */
    public function index()
    {
        $employee = Employee::all();
        return view("index", compact('employee'));
    }

    /*
    * Create PDF
    */
    public function createPDF()
    {
        $data = Employee::all();
        view()->share('employee',$data);
        $pdf = PDF::loadView('pdf_view');
        return $pdf->download('pdf_file.pdf');
    }
}
