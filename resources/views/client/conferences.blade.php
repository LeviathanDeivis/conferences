@extends('layouts.app')

@section('content')

<h2>{{ __('messages.client_conferences') }}</h2>

<div class="row">

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">Cybersecurity Vilnius</h5>
                <p class="card-text">
                    {{ __('messages.date') }}: 2026-06-14 <br>
                    {{ __('messages.speaker') }}: Johan Vogel
                </p>

                <a href="/client/conference/1" class="btn btn-primary">
                    {{ __('messages.view_details') }}
                </a>

            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">PHP Summit</h5>
                <p class="card-text">
                    {{ __('messages.date') }}: 2026-08-14 <br>
                    {{ __('messages.speaker') }}: Lukas Vileika
                </p>

                <a href="/client/conference/2" class="btn btn-primary">
                    {{ __('messages.view_details') }}
                </a>

            </div>
        </div>
    </div>

</div>

@endsection