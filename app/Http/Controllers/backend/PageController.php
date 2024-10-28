<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use DB;

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
    public function update(Request $request, $id)
    {
        $data = array();
        $data['title'] = $request -> title;
        $data['type'] = $request -> type;
        $data['description'] = $request -> description;
        DB::table('pages') -> where('id', $id) -> update($data);
        return redirect()->route('page.index') -> with('success', 'Data updated success!');
    }
}
