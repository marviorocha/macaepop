<header id="header">
        <div class="top-bar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p> 
                        <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social login-top">
                    {{ HTML::link('users/login','Login',array('class'=>'btn')) }} | {{ HTML::link('users/create','Cadastre-se (Grátis)',array('class'=>'btn')) }}
                     <!--        <div class="search">
                                <form role="form">
                                    <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                                    <i class="fa fa-search"></i>
                                </form>
                           </div> -->
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ Request::root() }}">{{ HTML::image('images/logo.png','logo') }}</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li>{{ HTML::link('#','Quem somos') }}</li>
                        <li>{{ HTML::link('#','Servicos') }}</li>
                        <li>{{ HTML::link('#','Blog') }}</li>
                        
                        <li>{{ HTML::link('#','Empresa') }}</li>
                         <li>{{ HTML::link('#','FAQ') }}</li>                     
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header>