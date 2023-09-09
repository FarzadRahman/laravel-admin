<?php

namespace App\Http\Controllers;


use App\Models\Trans;
use Illuminate\Http\Request;
//use Knp\Snappy\Pdf;
use Illuminate\Support\Facades\App;
use PDF;
use Response;
use Yajra\DataTables\DataTables;
class TestController extends Controller
{
    public function index(){

//        return $data;
//        $pdf = PDF::loadView('pdf.invoice');
////        return $pdf->download('invoice.pdf');
//        return $pdf->stream('invoice.pdf');
//        $data = ["data" => "data"];
//        $pdf = PDF::loadView("pdf.invoice", $data);
//
//        return  $pdf->inline();


        $snappy = App::make('snappy.pdf');
//To file

        $html = view('pdf.invoice');
        $snappy->generateFromHtml($html, 'public/bill.pdf');

//Or output:
        return response()->file('public/bill.pdf');


        return new Response(
            $snappy->getOutputFromHtml($html),
            200,
            array(
                'Content-Type'          => 'application/pdf',
                'Content-Disposition'   => 'attachment; filename="file.pdf"'
            )
        );
    }

    public function dataTable(){
        return view('data-table');
    }

    public function getData(Request $r){
        $data=Trans::where('Branch','DHKC');
        $datatables = Datatables::of($data);
        return $datatables->make(true);
    }
}
