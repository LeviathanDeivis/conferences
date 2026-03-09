@extends('layouts.app')

@section('content')

<h2>{{ __('messages.admin_panel') }}</h2>
<p class="text-muted">{{ __('messages.conference_management') }}</p>
<hr>

<a href="/admin/conferences/create" class="btn btn-success mb-3">
    {{ __('messages.create_conference') }}
</a>

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

        <tr>
            <td>1</td>
            <td>Cybersecurity</td>
            <td>2026-06-14</td>
            <td>Johan Vogel</td>
            <td>

                <a href="/admin/conferences/1/edit" class="btn btn-sm btn-primary">
                    {{ __('messages.edit') }}
                </a>

                <form method="POST" action="/admin/conferences/{{ $id ?? 1 }}/delete" style="display:inline;">
                @csrf
                <button class="btn btn-sm btn-danger delete-btn">
                 {{ __('messages.delete') }}
                </button>
</form>

            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>PHP Summit</td>
            <td>2026-08-10</td>
            <td>Lukas Vileika</td>
            <td>

                <a href="/admin/conferences/2/edit" class="btn btn-sm btn-primary">
                    {{ __('messages.edit') }}
                </a>

               <form method="POST" action="/admin/conferences/{{ $id ?? 1 }}/delete" style="display:inline;">
                @csrf
               <button class="btn btn-sm btn-danger delete-btn">
                  {{ __('messages.delete') }}
            </button>
</form>

            </td>
        </tr>

    </tbody>

</table>

<script>

document.querySelectorAll('.delete-btn').forEach(button => {

    button.addEventListener('click', function() {

        Swal.fire({
            title: 'Confirm',
            text: "Are you sure you want to delete this conference?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            confirmButtonText: 'Delete'
        }).then((result) => {

            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Conference removed.',
                    'success'
                );
            }

        });

    });

});

</script>

@endsection

