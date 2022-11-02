<?php

namespace App\Services\Domains\Web;

use App\Models\Category;
use App\Models\Menu;
use App\Models\FeedbackResult;
use App\Models\ScheduleFeedback;
use Illuminate\Support\Facades\Auth;

class FeedBackService
{
    public function index()
    {
        return FeedbackResult::querySearch()->with('scheduleFeedback', 'user', 'facilityUser')->paginate(PAGINATION_PER_PAGE);
    }

    public function getCategories()
    {
        return Category::active()->get();
    }

    public function getFeedbackResultById($id)
    {
        return FeedbackResult::getFeedbackResultById($id);
    }

    public function getMenus()
    {
        return Menu::active()->get();
    }

    public function store($request, $id)
    {
        $this->changeReplyTrue($id);
        $facilityUser = Auth::user();
        $data = array(
            'schedule_feedback_id' => $id,
            'user_id' => NULL,
            'facility_user_id' => $facilityUser->id,
            'name' => $facilityUser->name,
            'feedback' => $request->feedback
        );

        return FeedbackResult::create($data);
    }

    public function changeReplyTrue($id)
    {
        $scheduleFeedback = ScheduleFeedback::findOrFail($id);
        return $scheduleFeedback->update([
            'reply' => REPLY_YES
        ]);
    }
}
