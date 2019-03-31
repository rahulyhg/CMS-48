
@extends('layouts.admin.app')

@extends('layouts.admin.nav')

@extends('layouts.admin.sidebar')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>Edit Nav Items</h1>
            <form method="POST" action="{{ route('navitem.update', 1) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="navName">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $navitem->name }}">
                </div>
                <div class="form-group">
                    <label for="navName">URI</label>
                    <input type="text" class="form-control" name="uri" value="{{ $navitem->uri}}">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection
