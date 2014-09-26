<header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3 col-xs-3 user-top">
                         
                               <a class="navbar-brand" href="{{ Request::root() }}/dashbord">{{ HTML::image('images/logo_dash.png','logo') }}</a>
                    
                    </div>

                    <div class="col-sm-5 col-xs-4">
                       <!-- Single button -->
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
           Oportunidades <span class="fa  fa-chevron-down"></span>
     </button>
          <ul class="dropdown-menu" role="menu">
 
    

            <li><a href="{{ Request::root() }}/search/administracao">Administração</a></li>
            <li><a href="{{ Request::root() }}/search/direito">Direito</a></li>
            <li><a href="{{ Request::root() }}/search/informatica ti">Informatica /TI</a></li>
            <li><a href="{{ Request::root() }}/search/marketing">Marketing</a></li>
            <li><a href="{{ Request::root() }}/search/contabilidade">Contabilidade</a></li>
            <li><a href="{{ Request::root() }}/search/offshore">Offshore</a></li>
            <li><a href="{{ Request::root() }}/search/comercio">Comércio</a></li>
            <li><a href="{{ Request::root() }}/search/economia">Economia</a></li>

 
            <li class="divider"></li>
             <li><a href="{{ Request::root() }}/vagas"> <i class="fa  fa-hand-o-right"></i> Vagas (by Indeed)</a></li>
          </ul>
        </div>

 
 <div class="btn-group">
 <p></p>
          <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
         Meu Curriculum <span class="fa  fa-chevron-down"></span>
     </button>
          <ul class="dropdown-menu" role="menu">
            <li> <a href="{{ Request::root() }}/dashbord"><i class="fa fa-dashboard"></i> Panel</a></li>
            
            <li><a href="{{ Request::root() }}/dashbord/curriculum"><i class="fa fa-file-text-o"></i> Curriculum</a></li>
            <li><a href="{{ Request::root() }}/dashbord/editar"><i class="fa fa-edit"></i> Editar</a></li>
           
     

 
         
      
 
            <li class="divider"></li>
             <li>     
        <a target="_black" href="view/{{ $cv->user_id }}">
        <i class="fa   fa-eye"></i> Visualizar </a> </li>
          </ul>
        </div>

                    </div>


                    <div class="col-sm-4 col-xs-4">
                       <div class="social user-top">

                     
             
          @if ($cv->foto == "")
    {{ HTML::image('images/blog/avatar2.png','Avatar',array('width'=>'40','height'=>'40') ) }} 
    @else
    {{ HTML::image( $cv->foto ,'Avatar',array( 'width'=>'40','height'=>'40') ) }} 
    @endif

     {{ $user->first_name }} {{ $user->last_name }} | {{ HTML::link('#myModal','Editar Perfil', ['class'=>'link','data-target'=>'#myModal','data-toggle'=>'modal'] ) }}  | {{ HTML::link('users/logout','Sair',array('class'=>'')) }}
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
        </div></header><!--/.top-bar-->

 
		
    </header>


<!-- 
Start Model Edit Profile -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar Perfil</h4>
      </div>
      <div class="modal-body">
      

 
    <div class="media">
    <a class="pull-left " href="#">

    @if ($cv->foto == "")
    {{ HTML::image('images/blog/avatar2.png','Avatar',array('class'=>'media-object','width'=>'80','height'=>'80') ) }} 
    @else
    {{ HTML::image( $cv->foto ,'Avatar',array('class'=>'media-object','width'=>'180','height'=>'180') ) }} 
    @endif
  
 
    {{ Form::open(array('url'=>'dashbord/profile','files' => true)) }}
    {{ Form::hidden('id',  $cv->id ) }}
    </a>
    <div class="media-body">
    <div class="form-group">
    <div class="col-xs-12">
    {{ Form::label('foto','Envie sua foto Max 200px') }}: <br>
   
    <a class="btn btn-primary" data-toggle="modal" href='#modal-2'><i class="fa  fa-folder-open"></i> Adicionar Foto</a>
    <p class="text-danger">{{ $errors->first('foto') }}</p>


   <p class="text-danger">{{ $errors->first('foto') }}</p>

    <p></p>
    </div>
    
    
    <p></p>
    
    
    <div class="form-group">
    <div class="col-xs-12">
    {{ Form::label('descricao','Coloque sua descrição') }}: <br>
    {{ Form::textarea('descricao',$cv->descricao, array('class'=>'summernote','placeholder'=>'Digite aqui informações sobre suas habilidades')) }}
   <p class="text-danger">{{ $errors->first('descricao') }}</p>

     <p></p>
    </div>
    
    </div>

    </div>
    </div>
    
    <p></p>
    </div>
 
    
      </div>
      <div class="modal-footer">

    <button type="submit" class="btn btn-success">Salvar Profile</button> 
    {{ HTML::link('dashbord','cancelar', array('class'=>'btn btn-default','data-dismiss'=>'modal')) }} 
     
 

            {{ Form::close() }}
      </div>
    </div>
  </div>
</div>

  <!-- Modal para adicionar foto -->
        
        
        <div class="modal fade" id="modal-2">
        <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Adicionar foto</h4>
        </div>
        <div class="modal-body">
        
        {{ Form::open(array('url'=>'dashbord/foto','files' => true)) }}
        
        <div class="form-group">
        
        <div class="col-xs-12">
        {{ Form::hidden('id',  $cv->id ) }}
        {{ Form::file('foto') }}
        <p class="text-danger">{{ $errors->first('foto') }}</p>
        </div>
        
        </div>
        
        
    
        
        </div>
        <div class="modal-footer">
         
        <button type="submit"  class="btn btn-primary">Salvar</button>
          {{ Form::close() }}
        </div>
        </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
