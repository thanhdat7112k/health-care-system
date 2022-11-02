<?php

namespace App\Services\Domains\API;

use App\Models\Menu;

class MenuService
{
    public function getMenusByCategoryId($categoryId)
    {
        $menus = Menu::getByCategoryId($categoryId)->active()->with('file')->get();

        return $this->getSpecifyColumns($menus);
    }

    protected function getSpecifyColumns($menus)
    {
        if ($menus->isEmpty()) {
            return [];
        }

        return $menus->map->only('id', 'img', 'name', 'description', 'price');
    }
}
