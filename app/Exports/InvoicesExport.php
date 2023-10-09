<?php

namespace App\Exports;

//use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\Trans;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class InvoicesExport implements FromView
{
    public function view(): View
    {
        return view('exports.invoices', [
            'invoices' => Trans::all()
        ]);
    }
}
