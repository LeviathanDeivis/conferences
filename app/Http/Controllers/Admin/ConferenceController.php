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
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
    return view('admin.index');
}


public function index()
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
    $conferences = Conference::all();

    return view('admin.conferences.index', [
        'conferences' => $conferences
    ]);
}

public function create()
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
    return view('admin.conferences.create', [
        'conference' => []
    ]);
}

public function edit($id)
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
     $conference = Conference::findOrFail($id);

    return view('admin.conferences.edit', [
        'conference' => $conference
    ]);
}

public function store(StoreConferenceRequest $request)
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
    Conference::create($request->validated());

    return redirect('/admin/conferences')
        ->with('success', 'Conference created successfully.');h('success', 'Conference updated successfully.');
}

public function update(StoreConferenceRequest $request, $id)
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
    $conference = Conference::findOrFail($id);
    $conference->update($request->validated());

    return redirect('/admin/conferences')
        ->with('success', 'Conference updated successfully.');
}

public function destroy($id)
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
     $conference = Conference::findOrFail($id);
    $conference->delete();

    return redirect('/admin/conferences')
        ->with('success', 'Conference deleted successfully.');
}
}
