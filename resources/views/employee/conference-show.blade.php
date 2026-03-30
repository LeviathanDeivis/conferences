@extends('layouts.app')

@section('content')

<h2>Employee Portal</h2>
<p class="text-muted">Conference details</p>

<hr>

<div class="card">
    <div class="card-body">
    <p>
        <strong>ID:</strong> {{ $conference->id }} <br>
        <strong>Title:</strong> {{ $conference->title }} <br>
        <strong>Description:</strong> {{ $conference->description ?? 'No description available.' }} <br>
        <strong>Date:</strong> {{ $conference->date }} <br>
        <strong>Speaker:</strong> {{ $conference->speakers }} <br>
        <strong>Address:</strong> {{ $conference->address }}
    </p>
    </div>
</div>

<hr>

<h4>Registered Users</h4>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection