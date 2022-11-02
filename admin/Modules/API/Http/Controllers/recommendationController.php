<?php

namespace Modules\API\Http\Controllers;

use App\Services\Domains\API\recommendationService;

class recommendationController extends BaseAPIController
{
    protected $recommendationService;

    public function __construct(recommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    public function index()
    {
        $recommendations = $this->recommendationService->index();

        return $this->apiSuccess($recommendations);
    }
}
