<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;

class ConferenceController extends Controller
{
    public function adminHome()
{
    return view('admin.index');
}

public function index()
{
    $conferences = Conference::all();

    return view('admin.conferences.index', [
        'conferences' => $conferences
    ]);
}

public function create()
{
    return view('admin.conferences.create', [
        'conference' => []
    ]);
}

public function edit($id)
{
     $conference = Conference::findOrFail($id);

    return view('admin.conferences.edit', [
        'conference' => $conference
    ]);
}

public function store(StoreConferenceRequest $request)
{
    Conference::create($request->validated());

    return redirect('/admin/conferences')
        ->with('success', 'Conference created successfully.');h('success', 'Conference updated successfully.');
}

public function update(StoreConferenceRequest $request, $id)
{
    $conference = Conference::findOrFail($id);
    $conference->update($request->validated());

    return redirect('/admin/conferences')
        ->with('success', 'Conference updated successfully.');
}

public function destroy($id)
{
     $conference = Conference::findOrFail($id);
    $conference->delete();

    return redirect('/admin/conferences')
        ->with('success', 'Conference deleted successfully.');
}
}
