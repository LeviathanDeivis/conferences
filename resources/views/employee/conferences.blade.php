@extends('layouts.app')

@section('content')

<h2>Employee Portal</h2>
<p class="text-muted">View all conferences and registered participants</p>

<hr>

<h4>Conferences</h4>

<div class="row">

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Cybersecuirty Vilnius</h5>

                <p class="card-text">
                    Date: 2026-06-14 <br>
                    Speaker: Johan Vogel
                </p>

                <a href="/employee/conference/1" class="btn btn-primary">
                    View Conference
                </a>

            </div>
        </div>
    </div>

</div>

@endsection