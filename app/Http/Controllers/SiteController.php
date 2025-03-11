<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\City;
use Carbon\Carbon;

class SiteController extends Controller
{
    public function getCities()
    {
        $cities = City::query()->orderBy('name')->get();
        return view('site.home', compact('cities'));
    }

    public function getAdsByCity(City $city)
    {
        $ads = Ad::query()->where('city_id', '=', $city->id)->orderBy('id', 'desc')->get();
        return view('site.ads', compact('ads', 'city'));
    }

    public function showAd(Ad $ad)
    {

        $date = Carbon::parse($ad->created_at)->translatedFormat('F j, Y');
        return view('site.ad', compact('ad', 'date'));
    }
}
