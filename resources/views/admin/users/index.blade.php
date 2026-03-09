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

        <tr>
            <td>1</td>
            <td>Petras</td>
            <td>Kazlauskas</td>
            <td>petras.kaz@gmail.com</td>
            <td>
                <a href="/admin/users/1/edit" class="btn btn-sm btn-primary">
                    Edit
                </a>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Agne</td>
            <td>Cvetkovic</td>
            <td>a.cvetkovic@gmail.com</td>
            <td>
                <a href="/admin/users/2/edit" class="btn btn-sm btn-primary">
                    Edit
                </a>
            </td>
        </tr>

    </tbody>

</table>

@endsection