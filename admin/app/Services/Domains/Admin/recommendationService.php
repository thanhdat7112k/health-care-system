<?php

namespace App\Services\Domains\Admin;

use App\Models\recommendations;


class recommendationService
{
    public function index()
    {
        return recommendations::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function store($request)
    {
        return recommendations::create([
            'recommendation' => $request->recommendation,
            'disease_name' => $request->disease_name
        ]);
    }

    public function getRecommendationById($id)
    {
        return recommendations::findOrFail($id);
    }

    public function update($request, $id)
    {
        $recommendation = $this->getRecommendationById($id);
        $data = $request->only('recommendation', 'disease_name');
        $recommendation->update($data);

        return $recommendation;
    }

    public function getActive()
    {
        return recommendations::active()->get();
    }

    public function getAllRecommendation()
    {
        return recommendations::all();
    }

    public function destroy($id)
    {
        $recommendation = $this->getRecommendationById($id);

        return $recommendation->destroy($id);
    }

}
