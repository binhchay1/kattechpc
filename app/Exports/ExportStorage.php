<?php

namespace App\Exports;

use App\Models\Storage;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportStorage implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Storage::all();
    }
}
