@extends('layouts.app')

@section('content')

<h2>{{ __('messages.details') }}</h2>

<div class="card">
    <div class="card-body">

        <p>
            <strong>{{ __('messages.title') }}:</strong> {{ $conference->title }} <br>
            <strong>{{ __('messages.description') }}:</strong> {{ $conference->description ?? 'No description available.' }} <br>
            <strong>{{ __('messages.date') }}:</strong> {{ $conference->date }} <br>
            <strong>{{ __('messages.speaker') }}:</strong> {{ $conference->speakers }} <br>
            <strong>{{ __('messages.address') }}:</strong> {{ $conference->address }}
        </p>

        <a href="/client/conferences" class="btn btn-secondary">
            {{ __('messages.back_to_conferences') }}
        </a>

    </div>
</div>

<hr>

@auth
<form method="POST" action="{{ url('/client/conference/' . $conference->id . '/register') }}">
    @csrf
    <button class="btn btn-success">Register</button>
</form>
@endauth

@guest
<a href="/login" class="btn btn-primary">Login to register</a>
@endguest

@if(session('success'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ session('success') }}"
        });
    });
</script>
@endif

@if(session('error'))
<script>
    document.addEventListener('DOMContentLoaded', function () {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "{{ session('error') }}"
        });
    });
</script>
@endif

@endsection