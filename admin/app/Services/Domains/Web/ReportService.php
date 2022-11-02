<?php

namespace App\Services\Domains\Web;

use App\Helpers\PaginateHelper;
use App\Models\Schedule;
use App\Models\Invoice;
use App\Models\User;
use Carbon\Carbon;

class ReportService
{
    public function createInvoice($month)
    {
        foreach($this->groupSchedulesByMonth() as $monthDone => $items) {
            if ($month != $monthDone) {
                return;
            }
            foreach($items as $item) {
                $user = User::findOrFail($item->user_id);
                Invoice::create([
                    'user_id' => $item->user_id,
                    'facility_user_id' => $item->facility_user_id,
                    'schedule_id' => $item->id,
                    'facility_id' => $item->facility_id,
                    'user_name' => $user->name,
                    'schedule_datetime' => $item->schedule_datetime,
                    'serve_done_datetime' => $item->serve_done_datetime,
                    'price' => $item->price,
                    'note' => $item->note
                ]);
            }
        }
    }

    public function getArrayMonthInvoices($request)
    {
        $invoices = $this->groupInvoicesByMonth($request);
        $listMonthInvoices = array();
        foreach($invoices as $month => $values){
            $listMonthInvoices[] = $month;
        }

        return $listMonthInvoices;
    }

    public function groupInvoicesByMonth()
    {
        return Invoice::querySearch()
            ->with('user')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->serve_done_datetime)->format('Y/m');
            });
    }

    public function groupSchedulesByMonth()
    {
        return Schedule::querySearchDoneTime()
            ->with('user')
            ->get()
            ->groupBy(function ($val) {
                return Carbon::parse($val->serve_done_datetime)->format('Y/m');
            });
    }

    public function getSchedulesToReport($request)
    {
        $schedules = $this->groupSchedulesByMonth();

        return PaginateHelper::customPaginate($schedules);
    }
}
