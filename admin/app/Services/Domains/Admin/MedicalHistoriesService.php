<?php

namespace App\Services\Domains\Admin;

use App\Models\medical_histories;

class MedicalHistoriesService
{
    public function index()
    {
        return medical_histories::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function getMedicalHistoryById($id)
    {
        return medical_histories::findOrFail($id);
    }

    public function destroy($id)
    {
        $history = $this->getMedicalHistoryById($id);

        return $history->destroy($id);
    }

}
