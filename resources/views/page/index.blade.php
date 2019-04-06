

@extends('layouts.admin.app')

@extends('layouts.admin.nav')

@extends('layouts.admin.sidebar')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>All Pages</h1>
            <p>List of all pages</p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">URI</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{ $page->id }}</th>
                        <td>{{ $page->navitem->name ?? ' '}}</td>
                        <td>{{ $page->navitem->uri ?? ' '}}</td>
                        <td>
                            <a role="button" href="{{ route('page.edit', $page->id) }}" class="btn btn-link">edit</a>
                            <a role="button" href="{{ route('page.delete', $page->id) }}" class="btn btn-link text-danger">delete</a>
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
