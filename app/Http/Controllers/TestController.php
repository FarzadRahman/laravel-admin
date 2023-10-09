<?php

namespace App\Http\Controllers;


use App\Exports\InvoicesExport;
use App\Imports\InvoicesImport;
use App\Models\Trans;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use Knp\Snappy\Pdf;
use Illuminate\Support\Facades\App;
use PDF;
use Response;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
class TestController extends Controller
{
    public function index(){
        return view('test');


    }
    public function export()
    {
//        $data=Trans::where('Branch','GAZC')->get();
//        return $data;
        return Excel::download(new InvoicesExport, 'invoices.xlsx');
    }

    public function import()
    {
//        return storage_path('test.xls');
        $data = Excel::toArray(new InvoicesImport, storage_path('test.xls'));
//        $data = Excel::import(new InvoicesImport, storage_path('test2.xls'));
//        $import = new InvoicesImport;
//        Excel::import($import, storage_path('test.xls'));
//        foreach ($data as $row)
//        {
//
//            return $row;
//        }


        $myArray = collect($data[0]);
        return Carbon::instance(\PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($myArray[0]['trxn_date']));
        return date("d-m-y H:i:s",$myArray[1]['trxn_date']);
//        return $myArray[0]['trxn_date'];

//        45132.534444873
//        date("Y-m-d", 1388516401);

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
        return view('oms.oms');
    }

    public function kycReport(){
//        return view('report');
//        return view('kyc');
        return view('test');
//        return view('auto-debit-form');
    }
}
