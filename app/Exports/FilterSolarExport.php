<?php

namespace App\Exports;

use App\Models\Sensor;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;

class FilterSolarExport implements FromQuery, WithCustomCsvSettings, WithHeadings, WithTitle
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
        return 'Solar Tracker';
    }

    public function headings(): array
    {
        return ["Voltage", "Current", "Power", "Energy", "X-Axis", "Y-Axis", "Reading Time"];
    }

    public function query()
    {
        return Sensor::select('value4', 'value5', 'value6', 'value7', 'value8', 'value9', 'reading_time')->whereBetween('reading_time', [$this->from, $this->to]);
    }
}
