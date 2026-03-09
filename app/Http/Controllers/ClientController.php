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
    return view('client.conference-show', ['id' => $id]);
}
}
