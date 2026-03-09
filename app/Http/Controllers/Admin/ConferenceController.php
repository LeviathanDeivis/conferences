<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
