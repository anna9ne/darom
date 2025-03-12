<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\City;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {
        $countUsers = User::count();
        $countCities = City::count();
        $countAds = Ad::count();
        return view('dashboard', compact('countUsers', 'countCities', 'countAds'));
    }

}
