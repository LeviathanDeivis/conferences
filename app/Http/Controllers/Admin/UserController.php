<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $users = [
            1 => [
                'name' => 'Petras',
                'surname' => 'Kazlauskas',
                'email' => 'petras.kaz@gmail.com'
            ],
            2 => [
                'name' => 'Agne',
                'surname' => 'Cvetkovic',
                'email' => 'a.cvetkovic@gmail.com'
            ]
        ];

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        $users = [
            1 => [
                'name' => 'Petras',
                'surname' => 'Kazlauskas',
                'email' => 'petras.kaz@gmail.com'
            ],
            2 => [
                'name' => 'Agne',
                'surname' => 'Cvetkovic',
                'email' => 'a.cvetkovic@gmail.com'
            ]
        ];

        $user = $users[$id] ?? null;

        return view('admin.users.edit', [
            'user' => $user,
            'id' => $id
        ]);
    }

}