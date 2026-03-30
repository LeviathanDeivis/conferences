<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\Support\Facades\DB;


class EmployeeController extends Controller
{
    public function index()
{
      $conferences = Conference::all();

    return view('employee.conferences', [
        'conferences' => $conferences
    ]);
}

public function show($id)
{
    $conference = Conference::findOrFail($id);

    $users = DB::table('users_conferences')
        ->join('users', 'users_conferences.user_id', '=', 'users.id')
        ->where('users_conferences.conference_id', $id)
        ->select('users.name', 'users.email')
        ->get();

    return view('employee.conference-show', [
        'conference' => $conference,
        'users' => $users
    ]);
}
}
