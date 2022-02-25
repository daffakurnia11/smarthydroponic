<?php

namespace App\Exports;

use App\Models\Sensor;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;

class FilterHydroponicExport implements FromQuery, WithCustomCsvSettings, WithHeadings, WithTitle
{
    use Exportable;

    public function __construct(string $from, string $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

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

    public function query()
    {
        return Sensor::select('value1', 'value2', 'value3', 'reading_time')->whereBetween('reading_time', [$this->from, $this->to]);
    }
}
