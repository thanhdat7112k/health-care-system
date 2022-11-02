<?php

namespace App\Services\Domains\Admin;

use App\Models\diseases;
use App\Models\recommendations;
use App\Models\symptoms;

class DiseaseService
{
    public function index()
    {
        return diseases::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function store($request)
    {
        return diseases::create($request->only('disease_name', 'description'));
    }

    public function update($request, $id)
    {
        $disease = $this->getDiseaseById($id);
        $disease->update($request->only('disease_name', 'description'));

        return $disease;
    }

    public function getActive()
    {
        return diseases::active()->get();
    }

    public function getAllDisease()
    {
        return diseases::all();
    }

    public function getDiseaseById($id)
    {
        return diseases::findOrFail($id);
    }

    public function destroy($id)
    {
        $disease = $this->getDiseaseById($id);
        recommendations::where('disease_name', 'like', '%'.$disease->disease_name.'%')->delete();
        symptoms::where('disease_name', 'like', '%'.$disease->disease_name.'%')->delete();

        return $disease->destroy($id);
    }
}


