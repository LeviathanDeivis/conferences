<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
{
    return view('employee.conferences');
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

    $registrations = [
        1 => [
            ['name' => 'Deividas Margis', 'email' => 'deivis.m@example.com'],
            ['name' => 'Jonas Kalpokas', 'email' => 'kalpokas.jonas@example.com']
        ],
        2 => [
            ['name' => 'Markas Rutkauskas', 'email' => 'marks.rut@example.com']
        ]
    ];

    $conference = $conferences[$id] ?? null;
    $users = $registrations[$id] ?? [];

    return view('employee.conference-show', [
        'conference' => $conference,
        'users' => $users,
        'id' => $id
    ]);
}
}
