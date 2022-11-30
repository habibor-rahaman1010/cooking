<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/e21bebfc6d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="{{secure_asset('assets/style.css')}}">
    {{-- for localhost this link  --}}
    {{-- <link rel="stylesheet" href="{{asset('assets/style.css')}}"> --}}


    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    {{-- <link rel="stylesheet" href="{{secure_asset('public/build/manifest.json')}}"> --}}
    <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    @vite('resources/css/app.css')

    <title>@yield('title')</title>

    <script defer src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"
  ></script>
  <script defer src="{{secure_asset('assets/app.js')}}"></script>
  </head>


  <body>
    @include('share.navbar')
    
   <div class="main-contant">
      <section>
        @yield('content')
      </section> 
   </div>
    
  
    @include('share.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
  </body>
</html>
