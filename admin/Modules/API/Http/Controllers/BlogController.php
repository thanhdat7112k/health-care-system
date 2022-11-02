<?php

namespace Modules\API\Http\Controllers;

use App\Services\Domains\API\BlogService;

class BlogController extends BaseAPIController
{
    protected $blogService;

    public function __construct(BlogService $blogService)
    {
        $this->blogService = $blogService;
    }

    public function index($categoryId)
    {
        $blogs = $this->blogService->index($categoryId);

        return $this->apiSuccess($blogs);
    }
}
