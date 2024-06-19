<?php

namespace App\Exports;

use App\Models\BuildPC;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportBuildPC implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return BuildPC::all();
    }
}
