@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">Edit User</p>

<hr>

<div class="card">
    <div class="card-body">

        <form method="POST" action="/admin/users/{{ $user->id }}">
        @csrf
        @method('PUT')

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ $user->name }}">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
            </div>

            <button class="btn btn-success">
                Save
            </button>

            <a href="/admin/users" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>
</div>

@endsection