@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">Edit Conference</p>

<hr>

<div class="card">
    <div class="card-body">

    <form method="POST" action="/admin/conferences/{{ $conference->id }}">
    @csrf
    @method('PUT')

    @include('admin.conferences.form')

    <button class="btn btn-success">
        Update Conference
    </button>

    <a href="/admin/conferences" class="btn btn-secondary">
        Cancel
    </a>
</form>

    </div>
</div>

@endsection