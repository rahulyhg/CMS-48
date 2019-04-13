
@extends('layouts.admin.app')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>All Messages</h1>
            <p>List of all messages submited from contact form.</p>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach($navitem as $item)--}}
                    {{--<tr>--}}
                        {{--<th scope="row">{{ $item->id }}</th>--}}
                        {{--<td>{{ $item->name }}</td>--}}
                        {{--<td>{{ $item->uri }}</td>--}}
                        {{--<td>--}}
                            {{--<a role="button" href="{{ route('message.show', $item->id) }}" class="btn btn-link">edit</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}

                </tbody>
            </table>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection
