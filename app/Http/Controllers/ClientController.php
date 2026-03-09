<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
{
    return view('client.conferences');
}

public function show($id)
{
    $conferences = [
        1 => [
            'title' => 'Cybersecurity Vilnius',
            'description' => 'Biggest CyberSecurity event this year in Baltic States',
            'speaker' => 'Johan Vogel',
            'date' => '2026-06-14',
            'address' => 'Litexpo'
        ],
        2 => [
            'title' => 'PHP Summit',
            'description' => 'Conference for PHP developers',
            'speaker' => 'Lukas Vileika',
            'date' => '2026-08-10',
            'address' => 'Litexpo'
        ]
    ];

    $conference = $conferences[$id] ?? null;

    return view('client.conference-show', [
    'conference' => $conference,
    'id' => $id
]);
}
public function register(Request $request, $id)
{
    return redirect('/client/conference/'.$id)
        ->with('success', 'You have successfully registered for the conference.');
}
}
