
@extends('layouts.admin.app')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>Edit Nav Items</h1>
            {{ $navitem }}
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
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Parent (optional)</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="parent_id">
                        <option selected>Choose...</option>
                        @foreach($navitems as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Active</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="active">
                        <option value="1" {{ $navitem->active ? 'selected' : '' }}>Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection
