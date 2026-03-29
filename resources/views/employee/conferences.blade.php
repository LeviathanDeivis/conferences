@extends('layouts.app')

@section('content')

<h2>Employee Portal</h2>
<p class="text-muted">View all conferences and registered participants</p>

<hr>

<h4>Conferences</h4>

<div class="row">
@foreach($conferences as $conference)
    <div class="card mb-3">
        <div class="card-body">

            <h5>{{ $conference->title }}</h5>

            <p>
                Date: {{ $conference->date }} <br>
                Speaker: {{ $conference->speakers }}
            </p>

            <a href="/employee/conference/{{ $conference->id }}" class="btn btn-primary">
                View Details
            </a>
        </div>
    </div>
@endforeach
</div>

@endsection