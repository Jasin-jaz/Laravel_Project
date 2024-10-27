<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $setting = Setting::whereId(1) -> first();
        return view('backend.settings.index', compact('setting'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $setting = Setting::findOrFail(1);
        $setting -> site_name = $request -> site_name;
        $setting -> email = $request -> email;
        $setting -> mobile = $request -> mobile;
        $setting -> address = $request -> address;
        $setting -> linkedin = $request -> linkedin;
        $setting -> facebook = $request -> facebook;
        $setting -> twitter = $request -> twitter;
        if ($request -> hasFile('logo')) {
            $file = $request -> file('logo');
            $file_extension = $file -> getClientOriginalExtension();
            $random_no = str::random(12);
            $file_name = $random_no.'.'.$file_extension;
            $destination_path = public_path().'/backend/img/logo/';
            $request -> file('logo') -> move($destination_path, $file_name);
            $setting -> logo = $file_name;
        }
        $setting -> save();
        return redirect() -> back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
