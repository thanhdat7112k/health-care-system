<?php

namespace Modules\API\Http\Controllers;

use App\Services\Domains\API\MenuService;

class MenuController extends BaseAPIController
{
    protected $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index($categoryId)
    {
        $menus = $this->menuService->getMenusByCategoryId($categoryId);

        return $this->apiSuccess($menus);
    }
}
