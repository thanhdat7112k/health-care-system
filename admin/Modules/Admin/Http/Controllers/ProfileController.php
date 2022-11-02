<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Domains\Admin\ProfileService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\ProfileRequest;

class ProfileController extends BaseAdminController
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    /**
     * Show the form for editing the specified resource.
     * @return Renderable
     */
    public function edit()
    {
        $title = 'Edit Profile';
        $admin = $this->profileService->edit();
        return view('admin::profiles.edit', [
            'title' => $title,
            'admin' => $admin,
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function update(ProfileRequest $request)
    {
        $this->profileService->update($request);
        return back()->with('success_message', trans('messages.update_success'));
    }
}
