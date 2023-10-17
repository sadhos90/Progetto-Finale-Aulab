<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cookie&family=Jost:wght@200;300;600&family=Lumanosimo&display=swap" rel="stylesheet">

    {{-- font awesome --}}
    <script src="https://kit.fontawesome.com/d0364d091f.js" crossorigin="anonymous"></script>

    @vite (['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lottie-web/5.12.2/lottie.min.js">
    <title>Fast News</title>
</head>
<body class="bg-custom-body">
    <x-navbar></x-navbar>
    
      
    


     {{-- @if ($errors->any())
    <div class="mt-5 alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif --}}

    @if (session('message'))
    <div class="container spazio-container" id="scompari">
        <body onload="setTimeout('document.getElementById(\'scompari\').style.display=\'none\'',2000)">
            ...
            </body>
        <div class="mt-5 row justify-content-center align-content-center">
            <div class="col-12 col-md-4 col-lg-6">
                <div class="text-center mt-5 alert alert-success spazio">
                    <div class="dot-spinner">
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                        <div class="dot-spinner__dot"></div>
                    </div>
                    {{session('message')}}
                </div>
            </div>
        </div>
    </div>
    @endif

    {{$slot}}


    <script src="https://kit.fontawesome.com/9ab4030d85.js" crossorigin="anonymous"></script>
    <x-footer></x-footer>
</body>
</html>