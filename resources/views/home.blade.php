@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Client Portal</h5>

                <p class="card-text">
                    View conferences and register for events.
                </p>

                <a href="/client/conferences" class="btn btn-primary">
                    Open Client Portal
                </a>

            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Employee Portal</h5>

                <p class="card-text">
                    View conferences and registered participants.
                </p>

                <a href="/employee/conferences" class="btn btn-primary">
                    Open Employee Portal
                </a>

            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Admin Panel</h5>

                <p class="card-text">
                    Manage conferences and system users.
                </p>

                <a href="/admin" class="btn btn-primary">
                    Open Admin Panel
                </a>

            </div>
        </div>
    </div>

</div>

@endsection