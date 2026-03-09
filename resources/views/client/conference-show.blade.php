@extends('layouts.app')

@section('content')

<h2>{{ __('messages.details') }}</h2>

<div class="card">
    <div class="card-body">

        <p>
            <strong>{{ __('messages.title') }}:</strong> {{ $conference['title'] }} <br>
            <strong>{{ __('messages.description') }}:</strong> {{ $conference['description'] ?? 'No description available.' }} <br>
            <strong>{{ __('messages.date') }}:</strong> {{ $conference['date'] }} <br>
            <strong>{{ __('messages.speaker') }}:</strong> {{ $conference['speaker'] }} <br>
            <strong>{{ __('messages.address') }}:</strong> {{ $conference['address'] }}
        </p>

        <a href="/client/conferences" class="btn btn-secondary">
            {{ __('messages.back_to_conferences') }}
        </a>

    </div>
</div>

<hr>

<h4>{{ __('messages.register_conference') }}</h4>

@if(session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<form method="POST" action="/client/conference/{{ $id }}/register">

    @csrf

    <div class="mb-3">
        <label class="form-label">{{ __('messages.name') }}</label>
        <input type="text" class="form-control" name="name" required>
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('messages.email') }}</label>
        <input type="email" class="form-control" name="email" required>
    </div>

    <button class="btn btn-primary">
        {{ __('messages.register') }}
    </button>

</form>

@endsection