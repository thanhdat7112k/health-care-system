<?php

namespace App\Services\Domains\Web;

use App\Models\Schedule;
use Carbon\Carbon;
use App\Models\Menu;
use App\Models\ScheduleMenu;
use Illuminate\Support\Facades\Mail;
use App\Mail\ScheduleDoneMail;

class ScheduleService
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function store($request)
    {
        $facility_user = auth()->user();

        $data = array_merge(
            [
                'facility_user_id' => $facility_user->id,
                'facility_id' => $facility_user->facility->id,
                'schedule_datetime' => $this->getDatetimeFromRequest($request),
                'price' => $this->menuService->calculateTotalPrice($request),
            ],
            $request->only('user_id', 'note', 'status'),
        );

        $schedule = Schedule::create($data);
        $this->createScheduleMenus($request, $schedule);

        return $schedule;
    }

    protected function getDatetimeFromRequest($request)
    {
        $schedule_date = Carbon::createFromFormat('d/m/Y', $request->get('date'))->format('Y-m-d');
        $schedule_time = $request->get('time');

        return $schedule_date . ' ' . $schedule_time;
    }

    protected function createScheduleMenus($request, &$schedule)
    {
        foreach ($this->menuService->getMenusByIds($request) as $menu) {
            $data = [
                'menu_id' => $menu->id,
                'name' => $menu->name,
                'price' => $menu->price,
            ];

            $schedule->scheduleMenus()->create($data);
        }
    }

    public function getScheduleById($id)
    {
        return Schedule::with('user', 'facility', 'scheduleMenus')->findOrFail($id);
    }

    public function update($request, $id)
    {
        $schedule = $this->getScheduleById($id);
        $data = $request->only('price', 'status');

        if ($data['status'] == STATUS_SCHEDULE_DONE && $schedule->status == STATUS_SCHEDULE_DONE) {
            return array(false, trans('messages.update_fail'));
        }

        if ($data['status'] == STATUS_SCHEDULE_DONE) {
            $data['serve_done_datetime'] = Carbon::now();
        }
        $schedule->update($data);

        $this->deleteOldScheduleMenu($id);
        $this->updateScheduleMenu($request, $id);
        $this->sendMail($id);

        return array(true, trans('messages.update_success'));
    }

    public function updateScheduleMenu($request, $id)
    {
        $menus = json_decode($request->menus);
        foreach($menus as $menu)
        {
            ScheduleMenu::create([
                'menu_id' => $menu->id,
                'schedule_id' => $id,
                'name' => $menu->name,
                'price' => $menu->price
            ]);
        }
    }

    public function deleteOldScheduleMenu($id)
    {
        $schedule = $this->getScheduleById($id);

        return $schedule->scheduleMenus()->delete();
    }

    public function sendMail($id)
    {
        $schedule = $this->getScheduleById($id);
        if($schedule->status != STATUS_SCHEDULE_DONE) {
            return false;
        }

        $emailUser = $schedule->user->email;

        return Mail::to($emailUser)->send(new ScheduleDoneMail($schedule));
    }

    public function getScheduleMenu($id)
    {
        $scheduleMenu = ScheduleMenu::where('schedule_id', $id)->get();

        return $scheduleMenu;
    }

    public function getCategoryMenu()
    {
        return Menu::querySortCategoryMenu()->with('category')->get();
    }

    public function index()
    {
        return Schedule::querySearch()->with('user', 'facility', 'scheduleMenus')->paginate(PAGINATION_PER_PAGE);
    }
}
