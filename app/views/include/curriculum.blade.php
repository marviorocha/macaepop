<header id="header">
        <div class="top-bar navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-3">
           
                               <a class="navbar-brand" href="{{ Request::root() }}/dashbord">{{ HTML::image('images/logo_dash.png','logo') }}</a>
                    </div>

 <p></p>

     <div class="col-sm-5   a2a_kit a2a_kit_size_32 a2a_default_style">
 
<a class="a2a_button_facebook"></a>
<a class="a2a_button_twitter"></a>
<a class="a2a_button_google_plus"></a>
<a class="a2a_button_linkedin"></a>
<a class="a2a_button_printfriendly"></a>
</div>
 
 


                    <div class="col-sm-4">
                    
                     <a class="btn btn-primary" title="{{ $cv->first_name }}" target="_blank" href="{{ Request::root() }}/curriculum/{{ $cv->user_id }}">
<i class="fa  fa-file-pdf-o"></i> Download em PDF </a>
 |   <a class="login-top" href="#"><i class="fa  fa-envelope-o"></i> Contratar </a>
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
 
		
    </header>