<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('website/css/bootstrap.min.css') !!}
    {!! Html::style('website/css/flexslider.css') !!}
    {!! Html::style('website/css/style.css') !!}
    {!! Html::style('website/css/font-awesome.min.css') !!}
    {!! Html::script('website/js/jquery.min.js') !!}

    <!-- <link href="website/css/bootstrap.min.css" rel="stylesheet" /> -->
    <!-- <link href="css/flexslider.css" rel="stylesheet" /> -->
    <!-- <link href="css/style.css" rel="stylesheet" /> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- <script src="js/jquery.min.js"></script> -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{getString()}} 
    |
    @yield('title')
    
    
    </title>
    @yield('head')

    <!-- Styles -->
</head>
<body style="direction:rtl">


    <div class="header">
    <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
        <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
        <ul class="nav" id="nav">
            <li class="current"><a href="{{url('/home')}}">الرئيسية </a></li>
            <li><a href="about.html">من  نحن </a></li>
            <li><a href="services.html">خدمتنا</a></li>
            <li><a href="contact.html">اتصل بنا </a></li>
            @guest
                            <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
                            <li><a href="{{ route('register') }}">تسجيل عضو  جديد</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            خروج
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
            <div class="clear"></div>
        </ul>
        <script type="text/javascript" src="js/responsive-nav.js"></script> 
        </div>
    </div>
    </div>
    <div id="app">
        

        @yield('content')
    </div>
    {!! Html::script('website/js/bootstrap.min.js') !!}
    {!! Html::script('website/js/jquery.flexslider.js') !!}
    <div class="footer">
  <div class="footer_bottom">
    <div class="follow-us"> 
            <a class="fa fa-facebook social-icon" href="{{getString('Facebook')}} " target="_blank"></a>
            <a class="fa fa-twitter social-icon" href="{{getString('twitter')}}" target="_blank"></a>
            <a class="fa fa-linkedin social-icon" href="{{getString('Facebook')}}" target="_blank"></a>
            <a class="fa fa-youtube social-icon" href="{{getString('Youtube')}}" target="_blank"></a> 
       </div>
    <div class="copy">
      <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
    </div>
  </div>
</div>
    @yield('footer')
    
    
</body>
</html>
