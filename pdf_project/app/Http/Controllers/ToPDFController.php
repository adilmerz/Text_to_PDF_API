<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ToPDFController extends Controller
{
    public function index(){


        return view("toPDF.index");
    }

    public function toPDF(Request $request){
        $text = $request->text;
        if(is_null($text)) $text = "simple text for testing";
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($text);
        $mpdf->Output();
    }
}
