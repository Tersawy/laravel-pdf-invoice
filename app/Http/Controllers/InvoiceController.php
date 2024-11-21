<?php

namespace App\Http\Controllers;

use PDF;

class InvoiceController extends Controller
{
    public function download()
    {
        return PDF::loadView('pdf-invoice')->download('invoice-' . time() . '-data.pdf');
    }

    public function stream()
    {
        return PDF::loadView('pdf-invoice')->stream('invoice-' . time() . '-data.pdf');
    }
}
