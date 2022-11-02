<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\diseases;
use App\Services\Domains\Admin\DiseaseService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\DiseaseRequest;

class DiseaseController extends BaseAdminController
{
    protected $diseaseService;

    public function __construct(DiseaseService $diseaseService)
    {
        $this->diseaseService = $diseaseService;
    }

    public function index(DiseaseRequest $request)
    {
        $title = 'Diseases';
        $diseases = $this->diseaseService->index();

        return view('admin::diseases.index', [
            'diseases' => $diseases,
            'title' => $title,
            'request' => $request
        ]);
    }

    public function create()
    {
        $title = 'Create';

        return view('admin::diseases.create', [
            'title' => $title
        ]);
    }

    public function store(DiseaseRequest $request)
    {
        $this->diseaseService->store($request);

        return redirect()->route('admin.diseases.index')
            ->with('success_message', trans('messages.create_success'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $title = 'Edit';
        $disease = $this->diseaseService->getDiseaseById($id);

        return view('admin::diseases.edit', [
            'disease' => $disease,
            'title'    => $title
        ]);
    }

    public function update(DiseaseRequest $request, $id)
    {
        $this->diseaseService->update($request, $id);

        return redirect()->route('admin.diseases.index')
            ->with('success_message', trans('messages.update_success'));
    }

    public function destroy($id)
    {
        $this->diseaseService->destroy($id);
        

        return redirect()->route('admin.diseases.index')
            ->with('success_message', trans('messages.delete_success'));
    }
}
