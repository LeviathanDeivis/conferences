<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;

class ConferenceController extends Controller
{
    public function adminHome()
{
    return view('admin.index');
}

public function index()
{
    return view('admin.conferences.index');
}

public function create()
{
    return view('admin.conferences.create', [
        'conference' => []
    ]);
}

public function edit($id)
{
    $conferences = [
        1 => [
            'title' => 'Cybersecurity Vilnius',
            'description' => 'Biggest CyberSecurity event this year in Baltic States',
            'speakers' => 'Johan Vogel',
            'date' => '2026-06-14',
            'time' => '10:00',
            'address' => 'Litexpo'
        ],
        2 => [
            'title' => 'PHP Summit',
            'description' => 'Conference for PHP developers',
            'speakers' => 'Lukas Vileika',
            'date' => '2026-08-10',
            'time' => '11:00',
            'address' => 'Litexpo'
        ]
    ];

    $conference = $conferences[$id] ?? [];

    return view('admin.conferences.edit', [
        'conference' => $conference,
        'id' => $id
    ]);
}

public function store(StoreConferenceRequest $request)
{
    return redirect('/admin/conferences')
        ->with('success', 'Conference created successfully.');
}

public function destroy($id)
{
    return redirect('/admin/conferences')
        ->with('success', 'Conference deleted successfully.');
}
}
