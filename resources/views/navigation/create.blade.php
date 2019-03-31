
@extends('layouts.admin.app')

@extends('layouts.admin.nav')

@extends('layouts.admin.sidebar')

@section('content')
    <body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">
        <div class="content-wrapper">
            <h1>Add Navigation</h1>
            <form>
                <div class="form-group">
                    <label for="navName">Name</label>
                    <input type="text" class="form-control" id="navName" aria-describedby="emailHelp">
                </div>
                <div class="form-group nav-items">
                    <label for="navItem">Nav Items</label>
                    <input type="text" class="form-control" id="navItem">
                    <button type="button" id="addItem" class="btn btn-secondary btn-sm mt-2"><i class="fas fa-plus-circle"></i> Add Item </button>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $( function() {
            $('#addItem').click( function() {
                console.log('heeloo');
                $('.nav-items').add('input');

            });
        });

    </script>
    </body>
    </html>
@endsection

