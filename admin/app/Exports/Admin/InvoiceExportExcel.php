<?php

namespace App\Exports\Admin;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class InvoiceExportExcel implements FromCollection, WithStyles, ShouldAutoSize, WithColumnWidths
{
    use Exportable;

    protected $invoices;

    protected $request;

    public function __construct($invoices, $request)
    {
        $this->invoices = $this->toCollection($invoices);
        $this->request = $request;

        if ($this->request->has('month')) {
            $this->invoices = $this->invoices->filter(function ($invoicesPerMonth, $month) {
                return $month === $this->request->get('month');
            });
        }
    }

    public function collection()
    {
        return collect([]);
    }

    public function styles(Worksheet $sheet)
    {
        $this->headerStyles($sheet);
        $this->tableStyles($sheet);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'B' => 25,
            'C' => 25,
            'D' => 15,
            'E' => 25,
            'F' => 25,
            'G' => 15,
            'H' => 15,
        ];
    }

    protected function headerStyles($sheet)
    {
        $sheet->setCellValue('A1', 'Schedule Date:');
        $sheet->setCellValue('B1', $this->getDateRange());
        $sheet->setCellValue('A2', 'Total:');
        $sheet->setCellValue('B2', '=SUM(G5:G' . (4 + $this->countTotalInvoices()) . ')');
    }

    protected function tableStyles($sheet)
    {
        $this->tableHeaderStyles($sheet);
        $this->tableBodyStyles($sheet);
    }

    protected function tableHeaderStyles($sheet)
    {
        $sheet->setCellValue('A4', 'Date');
        $sheet->setCellValue('B4', 'Name');
        $sheet->setCellValue('C4', 'Email');
        $sheet->setCellValue('D4', 'Phone');
        $sheet->setCellValue('E4', 'Schedule Date');
        $sheet->setCellValue('F4', 'Facility');
        $sheet->setCellValue('G4', 'Price');

        if (!$this->request->has('month')) {
            $sheet->setCellValue('H4', 'Total Price');
        }

        $sheet->getStyle('A4:H4')->getAlignment()->setHorizontal('center');
    }

    protected function tableBodyStyles($sheet)
    {
        $index = 5;

        foreach ($this->invoices as $month => $invoicesPerMonth) {
            $sheet->mergeCells('A' . $index . ':' . 'A' . ($index + $invoicesPerMonth->count() - 1));
            $sheet->setCellValue('A' . $index, $month);

            $sheet->getStyle('A' . $index)->getAlignment()->setHorizontal('center')->setVertical('center');

            if (!$this->request->has('month')) {
                $sheet->mergeCells('H' . $index . ':' . 'H' . ($index + $invoicesPerMonth->count() - 1));
                $totalPriceSyntax = '=SUM(G' . $index . ':' . 'G' . ($index + $invoicesPerMonth->count() - 1) . ')';
                $sheet->setCellValue('H' . $index, $totalPriceSyntax);

                $sheet->getStyle('H' . $index)->getAlignment()->setHorizontal('center')->setVertical('center');
            }

            foreach ($invoicesPerMonth as $invoice) {
                $sheet->setCellValue('B' . $index, $invoice->user->name);
                $sheet->setCellValue('C' . $index, $invoice->user->email);
                $sheet->setCellValue('D' . $index, $invoice->user->phone);
                $sheet->setCellValue('E' . $index, $invoice->schedule_datetime);
                $sheet->setCellValue('F' . $index, $invoice->facility->name);
                $sheet->setCellValue('G' . $index, $invoice->price);

                $index++;
            }
        }
    }

    protected function toCollection($items)
    {
        if (!$items instanceof Collection) {
            $items = collect($items);
        }

        return $items;
    }

    protected function countTotalInvoices()
    {
        return $this->invoices->reduce(function ($total, $invoicesPerMonth) {
            return $total + $invoicesPerMonth->count();
        });
    }

    protected function formatYmdDate($date)
    {
        return date('Y/m/d', strtotime($date));
    }

    protected function getDateRange()
    {
        $startDate = $this->invoices->last()->last()->serve_done_datetime;
        $endDate = $this->invoices->first()->first()->serve_done_datetime;

        return $this->formatYmdDate($startDate) . ' - ' . $this->formatYmdDate($endDate);
    }
}
