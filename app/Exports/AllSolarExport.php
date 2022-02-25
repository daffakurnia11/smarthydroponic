<?php

namespace App\Exports;

use App\Models\Sensor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;

class AllSolarExport implements FromCollection, WithCustomCsvSettings, WithHeadings, WithTitle
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
        return 'Solar Tracker';
    }

    public function headings(): array
    {
        return ["Voltage", "Current", "Power", "Energy", "X-Axis", "Y-Axis", "Reading Time"];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Sensor::select('value4', 'value5', 'value6', 'value7', 'value8', 'value9', 'reading_time')->get();
    }
}
