@extends('layouts.app')

@section('content')

<h2>{{ __('messages.admin_panel') }}</h2>
<p class="text-muted">{{ __('messages.conference_management') }}</p>
<hr>

@auth
@if(Auth::user()->hasRole('admin'))
<a href="/admin/conferences/create" class="btn btn-success mb-3">
    {{ __('messages.create_conference') }}
</a>
@endif
@endauth

<table class="table table-striped">

    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Date</th>
            <th>Speaker</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>

    @foreach($conferences as $conference)
        <tr>
            <td>{{ $conference->id }}</td>
            <td>{{ $conference->title }}</td>
            <td>{{ $conference->date }}</td>
            <td>{{ $conference->speakers }}</td>

            <td>

                @auth
                @if(Auth::user()->hasRole('admin'))

                <a href="/admin/conferences/{{ $conference->id }}/edit" class="btn btn-sm btn-primary">
                    {{ __('messages.edit') }}
                </a>

                <form method="POST" action="/admin/conferences/{{ $conference->id }}" style="display:inline;">
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-sm btn-danger">
                        {{ __('messages.delete') }}
                    </button>
                </form>

                @endif
                @endauth

            </td>
        </tr>
    @endforeach

    </tbody>

</table>

@endsection