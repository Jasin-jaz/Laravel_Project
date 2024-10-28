<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;

class PageController extends Controller
{
    public function page()
    {
        $allData = Page::all();
        return view('backend.page.index', compact('allData'));
    }
    public function edit($id)
    {
        $editData = Page::find($id);
        return view('backend.page.edit', compact('editData'));
    }
}
