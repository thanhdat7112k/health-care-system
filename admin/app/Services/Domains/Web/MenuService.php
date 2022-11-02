<?php

namespace App\Services\Domains\Web;

use App\Models\Menu;

class MenuService
{
    public function getActiveMenus()
    {
        return Menu::active()->with('category', 'file')->get();
    }

    public function calculateTotalPrice($request)
    {
        $menus = $this->getMenusByIds($request);

        return $menus->reduce(function ($total, $menu) {
            return $total + $menu->price;
        });
    }

    public function getMenusByIds($request)
    {
        $menu_ids = collect($request->get('menu_id'));

        return $menu_ids->map(function ($menu_id) {
            return $this->getMenuById($menu_id);
        });
    }

    public function getMenuById($id)
    {
        return Menu::findOrFail($id);
    }
}
