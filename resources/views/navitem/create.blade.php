
@extends('layouts.admin.app')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>Edit Nav Items</h1>
            <form method="POST" action="{{ route('navitem.store') }}">
                @csrf

                <div class="form-group">
                    <label for="navName">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Parent (optional)</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                        <option selected>Choose...</option>
                        @foreach($navitems as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="navName">URI</label>
                    <input type="text" class="form-control" name="uri" value="{{ old('uri') }}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Active</label>
                    <select class="form-control" id="exampleFormControlSelect2" name="active">
                        <option selected>Choose..</option>
                        <option value="1">Yes</option>
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