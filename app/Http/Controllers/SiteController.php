<?php

namespace App\Http\Controllers;

use App\Models\City;

class SiteController extends Controller
{
    public function getCities()
    {
        $cities = City::query()->orderBy('name')->get();
        return view('site.home', compact('cities'));
    }

    public function getAdsByCity($city)
    {
        $cities = City::query()->where('id', $city)->get();
        dd($cities);
    }
}
