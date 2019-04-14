
@extends('layouts.admin.app')


@section('content')
    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <div class="content-wrapper">
            <h1>Gallery</h1>
            <p>Upload files to use on your site.</p>

            <form action="/gallery"
                  class="dropzone"
                  id="my-awesome-dropzone">
                @csrf
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>

            <div class="dz-preview dz-file-preview">
                <div class="dz-details">
                    <div class="dz-filename"><span data-dz-name></span></div>
                    <div class="dz-size" data-dz-size></div>
                    <img data-dz-thumbnail />
                </div>
                <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress></span></div>
                <div class="dz-success-mark"><span>✔</span></div>
                <div class="dz-error-mark"><span>✘</span></div>
                <div class="dz-error-message"><span data-dz-errormessage></span></div>
            </div>

            <img src="removebutton.png" alt="Click me to remove the file." data-dz-remove />

        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
    </html>
@endsection

@section('footer')
    <script src="/js/dropzone.js"></script>

    <script>
        console.log(window.Dropzone);
    </script>
@endsection