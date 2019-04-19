
@extends('layouts.admin.app')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>All States</h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($navitem as $item)--}}
                    {{--<tr>--}}
                        {{--<th scope="row">{{ $item->id }}</th>--}}
                        {{--<td>{{ $item->name }}</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}

                </tbody>
            </table>

            <a role="button" href="{{ route('navitem.create') }}" id="addItem" class="btn btn-secondary btn-sm mt-2"><i class="fas fa-plus-circle"></i> Add Item </button>

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection
