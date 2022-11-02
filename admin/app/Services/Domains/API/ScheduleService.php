<?php

namespace App\Services\Domains\API;

use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;

class ScheduleService
{
    public function getScheduleByUserId($request)
    {
        
        $schedules = Schedule::where([
            ['user_id', Auth::user()->id],
            ['status', $request->query('status')]
        ])->with('menus:id,name,duration,price,file_id')
            ->select('id', 'price')->get();

        return $this->getSpecifyColumns($schedules);
    }

    protected function getSpecifyColumns($schedules)
    {
        return collect($schedules)->map(function ($item) {

            return [
                'id' => $item['id'],
                'price' => $item['price'],
                'menus' => $this->getMenuColumns($item)
            ];
        });
    }

    protected function getMenuColumns($menu)
    {
        return collect($menu['menus'])->map(function ($value) {

            return [
                'menuName' => $value['name'],
                'duration' => $value['duration'],
                'price' => $value['price'],
                'img' => $value['img']
            ];
        });
    }
}
