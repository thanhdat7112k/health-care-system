<?php

namespace App\Services\Domains\API;

use App\Models\Category;

class CategoryService
{
    public function getNormalCategories()
    {
        return Category::normal()->active()->get(['id', 'name']);
    }

    public function getComboCategories()
    {
        return Category::combo()->active()->get(['id', 'name']);
    }
}
