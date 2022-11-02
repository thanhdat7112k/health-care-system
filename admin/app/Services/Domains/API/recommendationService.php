<?php

namespace App\Services\Domains\API;

use App\Models\recommendations;

class recommendationService
{
    public function index()
    {
        $recommendations = recommendations::get(['recommendation', 'disease_name']);

        return $recommendations;
    }
}
