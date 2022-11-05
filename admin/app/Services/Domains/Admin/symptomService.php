<?php

namespace App\Services\Domains\Admin;

use App\Models\symptoms;
use App\Models\diseases;

class symptomService
{
    public function index()
    {
        return symptoms::querySearch()->paginate(PAGINATION_PER_PAGE);
    }

    public function store($request)
    {
        $check = diseases::where('disease_name','like','%'.$request->disease_name.'%')->count();
        if(!$check) return false;

        return symptoms::create([
            'symptom_name' => $request->symptom_name,
            'weight' => $request->weight,
            'disease_name' => $request->disease_name
        ]);
    }

    public function getSymptomById($id)
    {
        return symptoms::findOrFail($id);
    }

    public function update($request, $id)
    {
        $symptom = $this->getSymptomById($id);
        $data = $request->only('symptom_name', 'weight', 'disease_name',);
        $symptom->update($data);

        return $symptom;
    }

    public function getActive()
    {
        return symptoms::active()->get();
    }

    public function getAllSymptom()
    {
        return symptoms::all();
    }

    public function destroy($id)
    {
        $symptom = $this->getSymptomById($id);

        return $symptom->destroy($id);
    }

}
