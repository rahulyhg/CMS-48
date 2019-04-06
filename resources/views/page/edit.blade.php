
@extends('layouts.admin.app')

@extends('layouts.admin.nav')

@extends('layouts.admin.sidebar')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>Edit Page</h1>
            <form method="POST" action="{{ route('page.update', $page->id) }}">
                @csrf
                @method('PUT')

                <div class="form-group col-md-4">
                    <label for="inputState">Select Nav Item</label>
                    <select id="inputState" class="form-control" name="navitem_id">
                        <option>Choose...</option>
                        @foreach($navitems as $item)
                            <option value="{{ $item->id }}" {{ $item->id === $pages->id ? 'selected' : '' }}>{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Page Content</label>

                    <input id="content" type="hidden" name="content" value="{{ $page->content }}">
                    <trix-editor input="content"></trix-editor>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/trix.js') }}"></script>
    </body>
    </html>
@endsection
