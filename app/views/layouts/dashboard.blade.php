<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    
    <!-- core CSS -->
    {{ HTML::style('css/bootstrap.min.css')}}
    {{ HTML::style('css/font-awesome.min.css')}}
    {{ HTML::style('css/animate.min.css')}}
    {{ HTML::style('css/prettyPhoto.css')}}
    {{ HTML::style('css/dashboard.css')}}
    {{ HTML::style('css/responsive.css')}}
    {{ HTML::style('js/tags/bootstrap-tagsinput.css') }}
 
    <!--[if lt IE 9]>
      {{ HTML::script('js/html5shiv.js')}}
      {{ HTML::script('js/js/respond.min.js')}}   
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

    <!--/header-->
@include('include.dashboard')

    <section id="feature" class="transparent-bg">
        <div class="conteiner">
            
            @yield('bartop')

            @yield('content')

            @yield('barbutton')

        </div><!--/.container-->
    </section><!--/#feature-->


    <section id="bottom">
        <div class="container" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; {{ date('Y') }} <a target="_blank" href="http://macaepop.com.br/" title="Macaé POP Emprego e Network">Macaé POP</a>. Todos os direitos reservados.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>

                    
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
    
{{ HTML::script('js/jquery.js') }}
{{ HTML::script('js/bootstrap.min.js') }}
{{ HTML::script('js/jquery.prettyPhoto.js') }}
{{ HTML::script('js/jquery.isotope.min.js') }}
{{ HTML::script('js/mask/jquery.mask.min.js') }}
{{ HTML::script('js/mask/mask.js') }}
{{ HTML::script('js/main.js') }}
{{ HTML::script('js/wow.min.js') }}
{{ HTML::script('js/editor/tinymce.min.js') }}
{{ HTML::script('js/editor/editor.js') }}
{{ HTML::script('js/tags/bootstrap-tagsinput.js') }} 
{{ HTML::script('js/field.js') }}
 

 
 
</body>
</html>