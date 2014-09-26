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
    {{ HTML::style('//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css')}}
    {{ HTML::style('css/animate.min.css')}}
    {{ HTML::style('css/prettyPhoto.css')}}
    {{ HTML::style('css/main.css')}}
    {{ HTML::style('css/responsive.css')}}
     
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
@include('include.curriculum')

    <section id="feature" class="transparent-bg">
        <div class="conteiner">
            
            @yield('bartop')

            @yield('content')

            @yield('barbutton')

        </div><!--/.container-->
    </section><!--/#feature-->


 

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