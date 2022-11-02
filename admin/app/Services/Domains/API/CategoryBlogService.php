<?php

namespace App\Services\Domains\API;

use App\Models\CategoryBlog;

class CategoryBlogService
{
    public function index()
    {
        $categories = CategoryBlog::active()->get(['id', 'name']);

        return $categories;
    }
}
