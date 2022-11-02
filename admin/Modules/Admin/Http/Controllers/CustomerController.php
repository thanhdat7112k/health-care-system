<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Domains\Admin\CustomerService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\CustomerRequest;
use App\Mail\CreateCustomerMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends BaseAdminController
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index(CustomerRequest $request)
    {
        $title = 'Customer';
        $users = $this->customerService->index();

        return view('admin::customers.index', [
            'users' => $users,
            'title' => $title,
            'request' => $request
        ]);
    }

    public function create()
    {
        $title = 'Create';

        return view('admin::customers.create', [
            'title' => $title,
        ]);
    }

    public function store(CustomerRequest $request)
    {
        $this->customerService->store($request);

        return redirect()->route('admin.customers.index')
            ->with('success_message', trans('messages.create_success'));
    }

    public function edit($id)
    {
        $title = 'Edit';
        $user = $this->customerService->edit($id);

        return view('admin::customers.edit', [
            'user' => $user,
            'title' => $title,
        ]);
    }

    public function update(CustomerRequest $request, $id)
    {
        $this->customerService->update($request, $id);

        return redirect()->route('admin.customers.index')
            ->with('success_message', trans('messages.update_success'));
    }

    public function destroy($id)
    {
        $this->customerService->destroy($id);

        return redirect()->route('admin.customers.index')
            ->with('success_message', trans('messages.delete_success'));
    }
}
