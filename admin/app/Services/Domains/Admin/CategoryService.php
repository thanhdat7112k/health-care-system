<?php

namespace App\Services\Domains\Admin;

use App\Models\Category;

class CategoryService
{
    public function index()
    {
        return Category::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function store($request)
    {
        return Category::create([
            'name' => $request->name,
            'status' => $request->status,
            'type' => $request->type,
        ]);
    }

    public function edit($id)
    {
        return Category::findOrFail($id);
    }

    public function update($request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->only('name', 'status', 'type');
        $category->update($data);

        return $category;
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->menus()->delete();

        return $category->destroy($id);
    }

    public function getUsedCategories()
    {
        return Category::active()->get();
    }
}
