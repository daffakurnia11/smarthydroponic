<?php

namespace App\Exports;

use App\Models\Sensor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;

class AllHydroponicExport implements FromCollection, WithCustomCsvSettings, WithHeadings, WithTitle
{
    use Exportable;

    public function getCsvSettings(): array
    {
        return [
            'delimiter' => ';'
        ];
    }

    public function title(): string
    {
        return 'Hydroponic';
    }

    public function headings(): array
    {
        return ["pH", "EC (ppm)", "Level", "Reading Time"];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Sensor::select('value1', 'value2', 'value3', 'reading_time')->get();
    }
}
