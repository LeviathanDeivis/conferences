@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">Conference Management</p>

<hr>

<a href="/admin/conferences/create" class="btn btn-success mb-3">
    Create Conference
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
                    Edit
                </a>

                <a href="#" class="btn btn-sm btn-danger">
                    Delete
                </a>

            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>PHP Summit</td>
            <td>2026-08-10</td>
            <td>Lukas Vileika</td>
            <td>

                <a href="/admin/conferences/2/edit" class="btn btn-sm btn-primary">
                    Edit
                </a>

                <a href="#" class="btn btn-sm btn-danger">
                    Delete
                </a>

            </td>
        </tr>

    </tbody>

</table>

@endsection