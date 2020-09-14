<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

      <link rel="stylesheet" type="text/css" href="{{asset('front/css/4.4.1.bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('front/css/slick-theme.css')}}"> 
      <meta name="viewport" content="maximum-scale=1, width=device-width" />








      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <title>Exploritage</title>
   </head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        @include('partials.front.header')

        <!-- Page Content  -->

        <div id="content">
            @yield('content')
            @include('partials.front.footer')
        </div>
    </div>

    <script src="{{asset('front/js/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

      <script src="{{asset('front/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('front/js/wow.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('front/js/slick.js')}}" type="text/javascript"></script>
      <script src="{{asset('front/js/custom.js')}}" type="text/javascript"></script>
      <script src="{{asset('front/js/nouislider.min.js')}}" type="text/javascript"></script>
      <script src="{{asset('front/js/jquery.validate.js')}}" type="text/javascript"></script>





      <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
      <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

	




     @yield('scripts')
      

   





   </body>

</body>

</html>