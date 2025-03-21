<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::query()->orderBy('id', 'desc')->paginate(20);

        return view('dashboard.ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cities = \App\Models\City::query()->orderBy('name', 'asc')->get();

        return view('dashboard.ads.create', compact('cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'phone' => 'nullable|max:255',
            'email' => 'nullable|max:255',
            'city_id' => 'required',
            'active' => 'nullable',
        ]);

        $data['slug'] = Str::slug($data['title']) . '-' . time();

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }

        $data['user_id'] = Auth::user()->id;

        $data['moderated'] = 1;

        Ad::create($data);

        return redirect()->route('dashboard.ads.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function show(Ad $ad)
    {
        return view('dashboard.ads.show', compact('ad'));
    }



    public function edit(Ad $ad)
    {
        $cities = \App\Models\City::query()->orderBy('name', 'asc')->get();
        return view('dashboard.ads.edit', compact('ad', 'cities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        $data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'description' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'phone' => 'nullable|max:255',
            'email' => 'nullable|max:255',
            'city_id' => 'required',
            'active' => 'nullable',
        ]);

        if (isset($data['image'])) {
            $data['image'] = Storage::disk('public')->put('/images', $data['image']);
        }
        $ad->update($data);

        return redirect()->route('dashboard.ads.show', $ad);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        $ad->delete();

        return redirect()->route('dashboard.ads.index');
    }
}
