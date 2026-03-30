<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
        $users = User::all();

        return view('admin.users.index', [
            'users' => $users
        ]);
    }

    public function edit($id)
    {
        if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
        $user = User::findOrFail($id);

        return view('admin.users.edit', [
            'user' => $user
        ]);
    }

    public function update(Request $request, $id)
{
    if (!auth()->user()->hasRole('admin')) {
    abort(403);
}
    $request->validate([
        'name' => 'required',
        'email' => 'required|email'
    ]);

    $user = User::findOrFail($id);

    $user->update([
        'name' => $request->name,
        'email' => $request->email
    ]);

    return redirect('/admin/users')->with('success', 'User updated successfully');
  }
}