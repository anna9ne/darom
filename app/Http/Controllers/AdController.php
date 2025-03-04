<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::query()->orderBy('id', 'desc')->get();

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
        //dd($request->image);

        $data = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:ads|max:255',
            'description' => 'required',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'phone' => 'nullable|max:255',
            'email' => 'nullable|max:255',
            'city_id' => 'required',
            'active' => 'nullable',
        ]);

        if (isset($data['image'])) {
            $data['image'] = Storage::put('/images', $data['image']);
        }
        $data['moderated'] = 0;
        $data['user_id'] = Auth::user()->id;

        Ad::create($data);

        return redirect()->route('dashboard.ads.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ad $ad)
    {
        return view('dashboard.ads.edit', compact('ad'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ad $ad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ad $ad)
    {
        //
    }
}
