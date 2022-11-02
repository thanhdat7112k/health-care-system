<?php

namespace Modules\Admin\Http\Controllers;

use App\Services\Domains\Admin\MedicalHistoriesService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\MedicalHistoriesRequest;

class MedicalHistoriesController extends BaseAdminController
{
    protected $medicalHistoriesService;

    public function __construct(MedicalHistoriesService $medicalHistoriesService)
    {
        $this->medicalHistoriesService = $medicalHistoriesService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(MedicalHistoriesRequest $request)
    {
        $title = 'Medical Histories';
        $medicalHistories = $this->medicalHistoriesService->index();

        return view('admin::histories.index', [
            'medicalHistories' => $medicalHistories,
            'request'    => $request,
            'title'      => $title
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(MedicalHistoriesRequest $request)
    {
        $this->medicalHistoriesService->store($request);

        return redirect()->route('admin.histories.index')
            ->with('success_message', trans('messages.create_success'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */


    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */


    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->medicalHistoriesService->destroy($id);

        return redirect()->route('admin.histories.index')
            ->with('success_message', trans('messages.delete_success'));
    }
}
