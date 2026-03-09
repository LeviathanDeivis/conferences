@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">Edit User</p>

<hr>

<div class="card">
    <div class="card-body">

        <form method="POST" action="#">

            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" value="John">
            </div>

            <div class="mb-3">
                <label class="form-label">Surname</label>
                <input type="text" class="form-control" value="Smith">
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" value="john@example.com">
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