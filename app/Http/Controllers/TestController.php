<?php

namespace App\Http\Controllers;


use App\Models\Trans;
use Illuminate\Http\Request;
//use Knp\Snappy\Pdf;
use Illuminate\Support\Facades\App;
use PDF;
use Response;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;
class TestController extends Controller
{
    public function index(){
        return view('test');


    }

    public function getPdf(Request $r){

//        return $r->limit;
        File::delete('public/bill.pdf');
        $snappy = App::make('snappy.pdf');
//To file

        $html = view('pdf.invoice',compact('r'));
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

    public function form(){
        return view('form');
    }

    public function table(){
        return view('table');
    }
    public function profile(){
        return view('profile');
    }

    public function oms(){
        return view('oms');
    }
}
