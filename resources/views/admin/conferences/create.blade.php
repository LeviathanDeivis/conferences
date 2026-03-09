@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">Create Conference</p>

<hr>

<div class="card">
    <div class="card-body">

        <form method="POST" action="/admin/conferences">
            @csrf

            @include('admin.conferences.form')

            <button class="btn btn-success">
                Save Conference
            </button>

            <a href="/admin/conferences" class="btn btn-secondary">
                Cancel
            </a>

        </form>

    </div>
</div>

@endsection