<?php

namespace App\Services\Domains\Admin;

use App\Models\feedback_rateds;

class FeedbackService
{
    public function index()
    {
        return feedback_rateds::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function getFeedbackById($id)
    {
        return feedback_rateds::findOrFail($id);
    }

    public function destroy($id)
    {
        $feedback = $this->getFeedbackById($id);
        $feedback->delete();

        return $feedback->destroy($id);
    }

}
