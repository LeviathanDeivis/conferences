@extends('layouts.app')

@section('content')

<h2>Conference Details</h2>

<div class="card">
    <div class="card-body">

        <p>
            <strong>Title:</strong> {{ $conference['title'] }} <br>
            <strong>Description:</strong> {{ $conference['description'] ?? 'No description available.' }} <br>
            <strong>Date:</strong> {{ $conference['date'] }} <br>
            <strong>Speaker:</strong> {{ $conference['speaker'] }} <br>
            <strong>Address:</strong> {{ $conference['address'] }}
        </p>

        <a href="/client/conferences" class="btn btn-secondary">
            Back to conferences
        </a>

    </div>
</div>

<hr>

<h4>Register for this conference</h4>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form method="POST" action="/client/conference/{{ $id }}/register">

    @csrf

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <button class="btn btn-primary">
        Register
    </button>

</form>

@endsection