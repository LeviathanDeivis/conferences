@extends('layouts.app')

@section('content')

<h2>Admin Panel</h2>
<p class="text-muted">User Management</p>

<hr>

<table class="table table-striped">

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        @foreach ($users as $id => $user)

<tr>
    <td>{{ $id }}</td>
    <td>{{ $user['name'] }}</td>
    <td>{{ $user['surname'] }}</td>
    <td>{{ $user['email'] }}</td>
    <td>
        <a href="/admin/users/{{ $id }}/edit" class="btn btn-sm btn-primary">
            Edit
        </a>
    </td>
</tr>

@endforeach


    </tbody>

</table>

@endsection