@extends('layouts.app')

@section('content')

<div class="row">

    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">{{ __('messages.client_portal') }}</h5>

                <p class="card-text">
                    {{ __('messages.client_card_text') }}
                </p>

                <a href="/client/conferences" class="btn btn-primary">
                    {{ __('messages.client_portal_open') }}
                </a>

            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">{{ __('messages.employee_portal') }}</h5>

                <p class="card-text">
                    {{ __('messages.employee_card_text') }}
                </p>

                <a href="/employee/conferences" class="btn btn-primary">
                    {{ __('messages.employee_portal_open') }}
                </a>

            </div>
        </div>
    </div>


    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">{{ __('messages.admin_portal') }}</h5>

                <p class="card-text">
                    {{ __('messages.admin_card_text') }}
                </p>

                <a href="/admin" class="btn btn-primary">
                    {{ __('messages.admin_portal_open') }}
                </a>

            </div>
        </div>
    </div>

</div>

@endsection