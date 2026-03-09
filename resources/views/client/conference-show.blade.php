@extends('layouts.app')

@section('content')

<h2>Conference Details</h2>

<div class="card">
    <div class="card-body">

        <h4>Conference ID: {{ $id }}</h4>

        <p>
            Title: Testing <br>
            Date: 2026-06-14 <br>
            Speaker: John Smith <br>
            Address: Litexpo
        </p>

        <a href="/client/conferences" class="btn btn-secondary">
            Back to conferences
        </a>

    </div>
</div>

@endsection