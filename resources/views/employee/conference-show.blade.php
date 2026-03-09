@extends('layouts.app')

@section('content')

<h2>Employee Portal</h2>
<p class="text-muted">Conference details</p>

<hr>

<div class="card">
    <div class="card-body">

        <h4>Conference ID: {{ $id }}</h4>

        <p>
            Title: Cybersecurity VIlnius <br>
            Date: 2026-06-14 <br>
            Speaker: Johan Vogel <br>
            Address: Litexpo
        </p>

        <h5>Registered Clients</h5>

        <ul>
            <li>Agne Vitulske</li>
            <li>Deivis Petrauskas</li>
            <li>Jonas Kazakevicius</li>
        </ul>

        <a href="/employee/conferences" class="btn btn-secondary">
            Back to conferences
        </a>

    </div>
</div>

@endsection