<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;

class ClientController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();

        return view('client.conferences', [
            'conferences' => $conferences
        ]);
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);

        return view('client.conference-show', [
            'conference' => $conference
        ]);
    }

    public function register(Request $request, $id)
    {
        return redirect('/client/conference/'.$id)
            ->with('success', 'You have successfully registered for the conference.');
    }
}