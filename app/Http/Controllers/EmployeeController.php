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
    return view('employee.conference-show', ['id' => $id]);
}
}
