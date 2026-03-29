@extends('layouts.app')

@section('content')

<h2>{{ __('messages.client_conferences') }}</h2>

<div class="row">

 @foreach($conferences as $conference)
    <div class="col-md-4">
        <div class="card mb-3">
            <div class="card-body">

                <h5 class="card-title">{{ $conference->title }}</h5>

                <p class="card-text">
                    Date: {{ $conference->date }} <br>
                    Speaker: {{ $conference->speakers }}
                </p>

                <a href="/client/conference/{{ $conference->id }}" class="btn btn-primary">
                    View Details
                </a>

            </div>
        </div>
    </div>
@endforeach
</div>

@endsection