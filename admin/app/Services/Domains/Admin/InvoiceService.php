<?php

namespace App\Services\Domains\Admin;

use App\Helpers\PaginateHelper;
use App\Models\Invoice;
use Carbon\Carbon;

class InvoiceService
{
    public function groupInvoicesByMonth()
    {
        return Invoice::querySearch()
            ->with('user', 'facility')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->serve_done_datetime)->format('Y/m');
            });
    }

    public function getInvoicesToReport($request)
    {
        if (!$request->has('dateStart') && !$request->has('dateEnd') && !$request->has('facility_id')) {
            $invoices = [];
        } else {
            $invoices = $this->groupInvoicesByMonth();
        }

        return PaginateHelper::customPaginate($invoices);
    }
}
