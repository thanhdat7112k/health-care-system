<?php

namespace App\Services\Domains\Admin;

use App\Models\Menu;
use App\Services\Infs\StorageServices;

class MenuService
{
    protected $storageService;

    public function __construct(StorageServices $storageService)
    {
        $this->storageService = $storageService;
    }

    public function index()
    {
        return Menu::querySearch()->with('category')->paginate(PAGINATION_PER_PAGE);
    }

    public function store($request)
    {
        $data = $request->only(['name', 'price', 'duration', 'category_id', 'status', 'description']);
        $file = $this->storeImage($request);

        return Menu::create(array_merge($data, ['file_id' => $file->id]));
    }

    public function edit($id)
    {
        return $this->getMenuById($id);
    }

    public function update($request, $id)
    {
        $menu = $this->getMenuById($id);
        $data = $request->only(['name', 'price', 'duration', 'category_id', 'status', 'description']);

        if ($request->hasFile('image')) {
            $this->storageService->deleteFile($menu->file_id);
            $file = $this->storeImage($request);
            $data = array_merge($data, ['file_id' => $file->id]);
        }

        $menu->update($data);

        return $menu;
    }

    public function destroy($id)
    {
        $menu = $this->getMenuById($id);
        $this->storageService->deleteFile($menu->file_id);

        return $menu->destroy($id);
    }

    public function getMenuById($id)
    {
        return Menu::findOrFail($id);
    }

    public function getUsedMenus()
    {
        return Menu::active()->with('category')->get();
    }

    protected function storeImage($request)
    {
        return $this->storageService->storeFile($request, MENU_IMAGES_DIR);
    }
}
