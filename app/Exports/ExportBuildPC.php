<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class ExportBuildPC implements FromView, WithColumnWidths
{
    protected $products;

    public function __construct($products)
    {
        $this->products = $products;
    }

    public function view(): View
    {
        return view('page.exports.build-pc-excel', [
            'products' => $this->products
        ]);
    }

    public function columnWidths(): array
    {
        $alphas = range('A', 'Z');
        $arrColumn = array();
        foreach ($alphas as $character) {
            $arrColumn[$character] = 5;
            $arrColumn['A' . $character] = 5;
        }

        return $arrColumn;
    }
}
