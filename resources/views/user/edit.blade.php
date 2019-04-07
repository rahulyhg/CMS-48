@extends('layouts.admin.app')

@extends('layouts.admin.nav')

@extends('layouts.admin.sidebar')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
   <!-- update user information -->
    <form>
        @csrf

    </form>

    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection
