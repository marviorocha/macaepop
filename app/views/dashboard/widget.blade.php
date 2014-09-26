    @section('barbutton')

 
    
    </div><!--/.col-md-8-->

    <aside class="col-md-4">
    


    <div class="widget search">
 
 

{{ Form::open(array('url' => 'vagas/search','method' => 'pos')) }}
 
    <input name="busca" type="text" class="form-control search_box" autocomplete="on" placeholder="Pesquisar vagas">
    </form>
    </div>

 
<!--     <span>
    <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fmacaepop.com.br&amp;width&amp;layout=button_count&amp;action=recommend&amp;show_faces=true&amp;share=false&amp;height=21&amp;appId=1401777610053745" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:21px;" allowTransparency="true"></iframe>
    </span>

    <span>
 Posicione esta tag onde você deseja que o botão +1 apareça. -->
<!-- <div class="g-plusone"></div>
    </span>

<span>
<script type="IN/Share"></script>
</span> -->
 
    <!--/.search-->
<!-- 


    <div class="widget categories">
    <h3>Recent Comments</h3>
    <div class="row">
    <div class="col-sm-12">
    <div class="single_comments">
    <img src="images/blog/avatar3.png" alt=""  />
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    <div class="entry-meta small muted">
    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
    </div>
    </div>
    <div class="single_comments">
    <img src="images/blog/avatar3.png" alt=""  />
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    <div class="entry-meta small muted">
    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
    </div>
    </div>
    <div class="single_comments">
    <img src="images/blog/avatar3.png" alt=""  />
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do </p>
    <div class="entry-meta small muted">
    <span>By <a href="#">Alex</a></span <span>On <a href="#">Creative</a></span>
    </div>
    </div>

    </div>
    </div>                     
    </div> recent comments-->
 

    <div class="widget categories">
    <h3>Novas vagas</h3>
    <div class="row">
    <div class="col-sm-6">
    <ul class="blog_category">
    <p> 


 
        </ul>
    </div>
    </div>                     
    </div><!--/.categories-->

<!--     <div class="widget archieve">
    <h3>Archieve</h3>
    <div class="row">
    <div class="col-sm-12">
    <ul class="blog_archieve">
    <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2013 <span class="pull-right">(97)</span></a></li>
    <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2013 <span class="pull-right">(32)</a></li>
    <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2013 <span class="pull-right">(19)</a></li>
    <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2013 <span class="pull-right">(08)</a></li>
    </ul>
    </div>
    </div>                     
    </div><!--/.archieve-->  

    <div class="widget tags">
    <h3>Tag Empresas</h3>
    <ul class="tag-cloud">





 @foreach ($jobs as $job)

   <li><a target='_top' class="btn btn-xs btn-primary" href="{{ Request::root() }}/search/{{ $job->company }}">{{ $job->company }}</a></li>
 
 @endforeach
 
    </ul>
    </div><!--/.tags-->
<!-- 
    <div class="widget blog_gallery">
    <h3>Our Gallery</h3>
    <ul class="sidebar-gallery">
    <li><a href="#"><img src="images/blog/gallery1.png" alt="" /></a></li>
    <li><a href="#"><img src="images/blog/gallery2.png" alt="" /></a></li>
    <li><a href="#"><img src="images/blog/gallery3.png" alt="" /></a></li>
    <li><a href="#"><img src="images/blog/gallery4.png" alt="" /></a></li>
    <li><a href="#"><img src="images/blog/gallery5.png" alt="" /></a></li>
    <li><a href="#"><img src="images/blog/gallery6.png" alt="" /></a></li>
    </ul>
    </div><!/.blog_gallery-->
    </aside>  
    </div><!--/.row-->
    </div>
    @stop