<?php

namespace App\Exports;

use App\Models\Visitor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VisitorsExport implements FromCollection, WithHeadings
{
    // Retorna la colección de datos a exportar
    public function collection()
    {
        return Visitor::selectRaw('DATE(visited_at) as Fecha, COUNT(*) as Visitas')
            ->groupBy('Fecha')
            ->orderBy('Fecha')
            ->get();
    }

    // Define los encabezados de columna en la primera fila
    public function headings(): array
    {
        return ['Fecha', 'Visitas'];
    }
}
