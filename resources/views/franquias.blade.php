@extends('blog.master')

@section('body')

<div class="container full-page">
      <div class="row">

        <!-- <div class="banner-view widget">
          <img src="img/ad.jpg" alt="">
        </div> -->

        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li><a href="{{ url('/')}}">Home</a></li>
            <li class="active">{{$title}}</li>
          </ol>
        </div><!--/breadcrumb-wrapper-->

        <div class="post-container container">

          <div class="col-md-9 list-view-post-format post-view content">

            <header class="page-header">
                <div class="page-title">
                  <h2 class="title">{{$title}}</h2>
                </div>
              </header>

            <div class="post margin-top-20 clearfix">
              <div class="row">              	
               <div class="list-item clearfix">
                 <div class="list-thumbnail col-md-4">
                   <img src="{{asset ('/img/logo.png')}}" alt="">
                  </div>                  
                 <div class="list-inner col-md-8">
                   <h4 class="title">                     
                     Franquia Virtual
                   </h4>                   
                   <p>Acesso pelo <a href="www.openblessimoveis.com.br">OpenblessImoveis</a> </p>
                  
                 </div>
               </div><!--/list-item-->  

                <div class="list-item clearfix">
                 <div class="list-thumbnail col-md-4">
                   <div class="widget-thumbnail corousel-wrapper">
                    <ul class="slider">                      
                    <li><img src="{{asset('/img/franquiaImobiliaria.jpg')}}" alt="Franquias Imobiliária"></a></li> 
                    <li><img src="{{asset('/img/OpenBlessCreci.jpg')}}" alt="Franquias Imobiliária"></a></li>  
                    <li><img src="{{asset('/img/franquiaImobiliaria.jpg')}}" alt="Franquias Imobiliária"></a></li>                      
                    </ul>
                  </div>
                  </div>                  
                 <div class="list-inner col-md-8">
                   <h4 class="title">                     
                     Franquia Florianópolis - Loja 001
                   </h4>                  
                   <span class="meta"><i class="fa fa-phone"></i>(048)3371-5253 / 3039-7151</span>
                   <span class="meta"><i class="fa fa-map-marker"></i>Rua Felipe Schmidt , Centro, 755</span>
                 </div>
               </div><!--/list-item-->  
                
              </div>            
               <footer class="page-footer clearfix">
                <div>
                 
                </div>               
              </footer>
            </div><!--/post-->


          </div><!--/news-post-format-->

          <aside class="col-md-3 sidebar">

            <div class="widget">
              <header class="widget-header">
                <h4 class="title">
                  Noticias
                </h4>
              </header>
              <div class="widget-content">
                <ul class="media-list list">
                  <li class="media">
                  	<div class="widget-content">
                  		@for ($i = 0; $i < 3; $i++)
                  		<ul class="list list-view">
                  		<li class="title"><a href="{{$noticia[$i]->getUrl1()}}">{{$noticia[$i]->title}}</a></li>
                  		</ul>
                  		@endfor
                  	</div>
                  </li>
                </ul>
              </div>
            </div><!--/widget list-->

            <div class="widget">
              <header class="widget-header">
                <h4 class="title">
                  Ultimos Videos
                </h4>
              </header>
              <ul class="media list">
             @for ($i = 0; $i < 2; $i++)
                <li class="media">
                  <div href="{{$video[$i]->getUrl3()}}" class="widget-thumbnail hover-thumbnail video-box">
                    <a href="{{$video[$i]->getUrl3()}}" class="media-object">                    
                    <div class="video-wrapper">
                      {!!$video[$i]->subtitle!!}
                  </div>                  
                  </div>
                  <div class="media-body margin-top-10">
                    <h4 class="media-heading title">
                      <a href="{{$video[$i]->getUrl3()}}">{{$video[$i]->title}}</a>
                    </h4>
                    
                  </div>
                </li>
                @endfor
              </ul>
            </div>

          </aside>

        </div><!--/post-view-->

      </div><!--/full-page-->
    </div><!-- /main-view -->

@stop