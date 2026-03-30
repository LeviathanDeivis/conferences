<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
    if (!Auth::check()) {
        return redirect('/login');
    }

    $exists = DB::table('users_conferences')
    ->where('user_id', Auth::id())
    ->where('conference_id', $id)
    ->exists();

if ($exists) {
    return redirect('/client/conference/'.$id)
        ->with('error', 'You are already registered for this conference.');
}

DB::table('users_conferences')->insert([
    'user_id' => Auth::id(),
    'conference_id' => $id
]);

return redirect('/client/conference/'.$id)
    ->with('success', 'You have successfully registered for the conference.');
}
}