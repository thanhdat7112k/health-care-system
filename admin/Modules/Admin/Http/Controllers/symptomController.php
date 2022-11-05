<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Domains\Admin\symptomService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\symptomRequest;

class symptomController extends BaseAdminController
{
    protected $symptomService;

    public function __construct(symptomService $symptomService)
    {
        $this->symptomService = $symptomService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(symptomRequest $request)
    {
        $title = 'Symptom';
        $symptoms = $this->symptomService->index();

        return view('admin::symptoms.index', [
            'symptoms' => $symptoms,
            'request'    => $request,
            'title'      => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create';

        return view('admin::symptoms.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(symptomRequest $request)
    {
        $data = $this->symptomService->store($request);
        if($data == false) return redirect()->route('admin.symptoms.create')
        ->with('error_message', 'Bệnh không tồn tai trong hệ thống');

        return redirect()->route('admin.symptoms.index')
            ->with('success_message', trans('messages.create_success'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $title = 'Edit symptoms';
        $symptom = $this->symptomService->getSymptomById($id);

        return view('admin::symptoms.edit', [
            'symptom' => $symptom,
            'title'    => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(symptomRequest $request, $id)
    {
        $this->symptomService->update($request, $id);

        return redirect()->route('admin.symptoms.index')
            ->with('success_message', trans('messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->symptomService->destroy($id);

        return redirect()->route('admin.symptoms.index')
            ->with('success_message', trans('messages.delete_success'));
    }
}
