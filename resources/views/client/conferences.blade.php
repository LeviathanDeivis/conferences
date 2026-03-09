@extends('layouts.app')

@section('content')

<h2>Client - Conferences</h2>

<div class="row">

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Cybersecurity Vilnius</h5>
                <p class="card-text">
                    Date: 2026-06-14 <br>
                    Speaker: Johan Vogel
                </p>

                <a href="/client/conference/1" class="btn btn-primary">
                    View Details
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">PHP Summit</h5>
                <p class="card-text">
                    Date: 2026-08-14 <br>
                    Speaker: Lukas Vileika
                </p>

                <a href="/client/conference/2" class="btn btn-primary">
                    View Details
                </a>

            </div>
        </div>
    </div>

</div>

@endsection