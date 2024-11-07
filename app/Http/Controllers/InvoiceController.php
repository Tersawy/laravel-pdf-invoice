<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class InvoiceController extends Controller
{
    public function index()
    {
        return view('invoice');
    }

    public function download()
    {
        return PDF::loadView('invoice')->download('invoice-' . time() . '-data.pdf');
    }

    public function stream()
    {
        return PDF::loadView('pdf')->stream('invoice-' . time() . '-data.pdf');
    }
}
