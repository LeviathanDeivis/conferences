@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">Conference administration</p>

<hr>

<div class="row">

    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">User Management</h5>

                <p class="card-text">
                    Manage system users
                </p>

                <a href="/admin/users" class="btn btn-primary">
                    Manage Users
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Conference Management</h5>

                <p class="card-text">
                    Create, edit and remove conferences.
                </p>

                <a href="/admin/conferences" class="btn btn-primary">
                    Manage Conferences
                </a>

            </div>
        </div>
    </div>

</div>

@endsection