<?php

namespace Modules\API\Http\Controllers;

use App\Services\Domains\API\AccountService;
use Modules\API\Http\Requests\AccountPasswordRequest;
use Modules\API\Http\Requests\AccountRequest;

class AccountController extends BaseAPIController
{
    protected $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function updateInfo(AccountRequest $request)
    {
        return $this->accountService->updateInfo($request);
    }

    public function updatePassword(AccountPasswordRequest $request)
    {
        return $this->accountService->updatePassword($request);
    }

    public function index()
    {
        return $this->accountService->index();
    }
}
