<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\recommendations;
use App\Services\Domains\Admin\recommendationService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\recommendationRequest;

class recommendationController extends BaseAdminController
{
    protected $recommendationService;

    public function __construct(recommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(recommendationRequest $request)
    {
        $title = 'Recommendation';
        $recommendations = $this->recommendationService->index();

        return view('admin::recommendations.index', [
            'recommendations' => $recommendations,
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

        return view('admin::recommendations.create', [
            'title' => $title
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(recommendationRequest $request)
    {
        $data = $this->recommendationService->store($request);
        if($data == false) return redirect()->route('admin.recommendations.create')
        ->with('error_message', 'Bệnh không tồn tai trong hệ thống');

        return redirect()->route('admin.recommendations.index')
            ->with('success_message', trans('messages.create_success'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $title = 'Edit Recommendations';
        $recommendation = $this->recommendationService->getRecommendationById($id);

        return view('admin::recommendations.edit', [
            'recommendation' => $recommendation,
            'title'    => $title
        ]);
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(recommendationRequest $request, $id)
    {
        $this->recommendationService->update($request, $id);

        return redirect()->route('admin.recommendations.index')
            ->with('success_message', trans('messages.update_success'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $this->recommendationService->destroy($id);

        return redirect()->route('admin.recommendations.index')
            ->with('success_message', trans('messages.delete_success'));
    }
}
