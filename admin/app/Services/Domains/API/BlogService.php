<?php

namespace App\Services\Domains\API;

use App\Models\Blog;

class BlogService
{
    public function index($categoryId)
    {
        $blogs = Blog::getByCategoryId($categoryId)->active()->with('file')->get();
        
        return $this->getSpecifyColumns($blogs);
    }

    protected function getSpecifyColumns($blogs)
    {
        if ($blogs->isEmpty()) {
            return [];
        }

        return $blogs->map->only('id', 'img', 'title', 'content');
    }
}
