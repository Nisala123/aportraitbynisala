<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

 
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title','Portrait by Nisala')
    </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css
">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}"/>--}}
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    

</head>
<body>
<div  id="app">

    <div class="top-bar">
        <div style="color:white" class="top-bar-left">
            <h4 class="brand-title">
                <a href="{{route('home')}}">
                    <i class="fa fa-pencil fa-lg" aria-hidden="true">
                    </i>
                    Portrait by Nisala
                </a>
            </h4>
        </div>
        <div class="top-bar-right">
            <ol class="menu">
                <li>
                    <a href="{{route('drawings')}}">
                        DRAWINGS
                    </a>
                </li>
                <li>
                    <a href="{{route('price')}}">
                        PRICES
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}">
                        CONTACT US
                    </a>
               </li>
             
            </ol>
        </div>
    </div>
    <div>
        @yield('content')
    </div>


</div>


<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            
            <p>Portrait by Nisala</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
           <!-- <i class="fi-html5"></i>-->
           <br>
           
            <img src="https://img.icons8.com/office/80/000000/pencil-tip.png"/>
            <br>
            <br>
            <p>"Pencils are the best !" <br>
                A unique pencil drawings for you by NISALA NAYANAJITH. Customized packages are available. 
                Contact us and place your order now. Island wide delivery available! </p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/nisala123">GitHub</a></li>
                <li><a href="https://facebook.com/AportraitbyNisala">Facebook</a></li>
                <li><a href="https://twitter.com/Nisala96">Twitter</a></li>
                <li><a href="https://instagram.com/nisala_nayanajith">instagram</a></li>

            </ul>
        </div>
    </div>
</footer>


</body>
</html>
