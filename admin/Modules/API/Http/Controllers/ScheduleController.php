<?php

namespace Modules\API\Http\Controllers;

use App\Services\Domains\API\ScheduleService;
use Illuminate\Http\Request;

class ScheduleController extends BaseAPIController
{
    protected $scheduleService;

    public function __construct(ScheduleService $scheduleService)
    {
        $this->scheduleService = $scheduleService;
    }

    public function index(Request $request)
    {
        $schedules = $this->scheduleService->getScheduleByUserId($request);

        return $this->apiSuccess($schedules);
    }
}
