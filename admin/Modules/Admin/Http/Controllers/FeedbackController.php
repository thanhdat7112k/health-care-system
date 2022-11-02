<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\feedback_rateds;
use App\Services\Domains\Admin\FeedbackService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Modules\Admin\Http\Controllers\BaseAdminController;
use Modules\Admin\Http\Requests\FeedbackRequest;

class FeedbackController extends BaseAdminController
{
    protected $feedbackService;

    public function __construct(FeedbackService $feedbackService)
    {
        $this->feedbackService = $feedbackService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(FeedbackRequest $request)
    {
        $title = 'Feedback';
        $feedbacks = $this->feedbackService->index();

        $rate = feedback_rateds::all()->count();
        $rate1 = feedback_rateds::where('rate', 'like', '%1%')->count();
        $rate2 = feedback_rateds::where('rate', 'like', '%2%')->count();
        $rate3 = feedback_rateds::where('rate', 'like', '%3%')->count();
        $rate4 = feedback_rateds::where('rate', 'like', '%4%')->count();
        $rate5 = feedback_rateds::where('rate', 'like', '%5%')->count();

        return view('admin::feedbacks.index', [
            'feedbacks' => $feedbacks,
            'request'    => $request,
            'title'      => $title,
            'rate' => $rate,
            'rate1' =>$rate1,
            'rate2' =>$rate2,
            'rate3' =>$rate3,
            'rate4' =>$rate4,
            'rate5' =>$rate5,
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
    public function store(FeedbackRequest $request)
    {
        $this->feedbackService->store($request);

        return redirect()->route('admin.feedbacks.index')
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
        $this->feedbackService->destroy($id);

        return redirect()->route('admin.feedbacks.index')
            ->with('success_message', trans('messages.delete_success'));
    }
}
