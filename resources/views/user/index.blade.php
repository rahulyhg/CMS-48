@extends('layouts.admin.app')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>All Users</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $item)
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{ $item->first_name . ' ' . $item->last_name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->role->name }}</td>
                <td>
                <a role="button" href="{{ route('message.show', $item->id) }}" class="btn btn-link">edit</a>
                </td>
                </tr>
                @endforeach

                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection
<!-- Only admin can view edit button for other users but admin cannot edit themselves -->