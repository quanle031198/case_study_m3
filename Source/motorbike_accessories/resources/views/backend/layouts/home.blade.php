<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BackEnd</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    {{-- <link rel="icon" href="{{ asset('frontend/img/core-img/favicon.ico') }}"> --}}

    <!-- Core Stylesheet -->
    <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('frontend/css/responsive/responsive.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    
    <link href="{{ asset('backend/main.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" rel="stylesheet">
   


</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
       {{-- header --}}
       @include('backend.layouts.header')
        {{-- tool --}}
       @include('backend.layouts.tool')

        <div class="app-main">
            {{-- menu-bar --}}
            @include('backend.layouts.menu_bar')

            {{-- content --}}
            <div class="app-main__outer">
                <div class="app-main__inner">
                    {{-- @include('backend.layouts.content_home') --}}
            @yield('content')
                </div>
            </div>
            {{-- ------- --}}
            <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
            <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
            {{-- <script>
                CKEDITOR.replace( 'summary-ckeditor', {
                    filebrowserUploadUrl: "{{route('blog.update','id', ['_token' => csrf_token() ])}}",
                    filebrowserUploadMethod: 'form'
                });
                </script> --}}
        </div>
    </div>
   <
    <script type="text/javascript" src="{{ asset('backend/assets/scripts/main.js') }}"></script>
    <script type="text/javascript" src={{ asset('js/myjs.js') }}></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"></script>
    <script>
        $('.dropify').dropify();
           </script>

    {{-- <!-- Jquery-2.2.4 js -->
    <script src="{{ asset('frontend/js/jquery/jquery-2.2.4.min.js') }}"></script>
    <!-- Popper js -->
    <script src="{{ asset('frontend/js/bootstrap/popper.min.js') }}"></script>
    <!-- Bootstrap-4 js -->
    <script src="{{ asset('frontend/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- All Plugins JS -->
    <script src="{{ asset('frontend/js/others/plugins.js') }}"></script>
    <!-- Active JS -->
    <script src="{{ asset('frontend/js/active.js') }}"></script>
</body> --}}

</html>
