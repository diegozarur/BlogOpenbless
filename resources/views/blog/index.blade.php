@extends('blog.master')

@section('body')

<div class="container main-view">
      <div class="row">
        <div class="col-md-6 main-content">
          <div class="widget">
            <div class="widget-thumbnail corousel-wrapper">
              <header class="widget-header">
                <h4 class="title">
                  OpenBless Portal Imobiliário
                </h4>
              </header>
              <ul class="slider">
          
              @for ($i = 0; $i < 2; $i++)
                          
                <li><a href="{{$last[$i]->getUrl()}}"><img class="open-blog" src="uploads/{{$last[$i]->image}}" alt="{{$last[$i]->title}}"></a>
                  <div class="widget-content caption-block">
                    <h3 class="title widget-title">
                      {{$last[$i]->title}}
                    </h3>
                    <div class="meta-wrapper">s
                      <span class="meta"><i class="fa fa-calendar"></i>{{ $last[$i]->created_at->format('d M,Y ') }}</span>
                      <span class="meta"><i class="fa fa-share-square-o"></i> </span>
                    </div>
                    <p class="slider-caption">{{substr(strip_tags($last[$i]->content), 0, 150)}}....</p>
                  </div>
                </li>
                @endfor
              </ul>
            </div>
          </div><!--/widget main-->

          <div class="widget">          
          
          
           @for ($i = 0; $i < 2; $i++) 
            <div class="row">
              <div class="widget-thumbnail widget-thumbnail-right-content teste col-md-12 col-lg-6">
                <a href="{{$last[$i]->getUrl()}}"><img class="open-blog" src="uploads/{{ $last[$i]->image }}" alt="{{ $last[$i]->title }}"></a>
              </div>
              <div class="widget-content widget-right-content col-md-12 col-lg-6">
                <h4 class="title widget-title">
                  {{ $last[$i]->title }}
                </h4>
                <p>{{substr(strip_tags($last[$i]->content), 0, 100)}}.... .</p>
              </div>
            </div>
             @endfor            
            
          </div><!--/widget right-content -->

          <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                Notícias
              </h4>
            </header>
            
           @for ($i = 0; $i < 2; $i++)
            <a href="{{$noticia[$i]->getUrl1()}}">
              <div class="widget-thumbnail">
                <img class="open-noticia" src="uploads/{{$noticia[$i]->image}}" alt="{{$noticia[$i]->title}}">
              </div>
              <div class="widget-content">
                <h3 class="title widget-title">
                  {{$noticia[$i]->title}}
                </h3>
                <p>{{substr(strip_tags($noticia[$i]->content), 0, 200)}}...</p>
              </div>
              </a>
              @endfor
              <a href="{{ url('/noticias')}}">
             <h4 class="title">
                Mais Notícias
              </h4>
              </a>
            </header>              
          </div><!--/widget block -->

          
        </div><!--/main-content-->
        <div class="col-md-3 second-content">

          <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                Últimos Videos
              </h4>
            </header>
            <div class="widget-content">
              <ul class="media-list list">
                @for ($i = 0; $i < 2; $i++)
                <li class="media">
                  <div href="{{$video[$i]->getUrl3()}}" class="widget-thumbnail hover-thumbnail video-box">
                    <a href="{{$video[$i]->getUrl3()}}" class="media-object">
                      <div class="video-wrapper">
                      {!!$video[$i]->subtitle!!}
                  </div>

                    </a>
                  </div>
                  <div class="media-body margin-top-10">
                    <h4 class="media-heading title">
                      {{$video[$i]->title}}
                    </h4>
                    
                  </div>
                </li> 
                 @endfor         
              </ul>
            </div>
          </div><!--/widget video list-->

          <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                FOTOS
              </h4>
            </header>
            <div class="widget-thumbnail corousel-wrapper">
              <ul class="slider">
              @for ($i = 0; $i < 2; $i++)
                <li><a href="{{$galeria[$i]->getUrl4()}}"><img src="uploads/{{$galeria[$i]->image}}" alt="{{$galeria[$i]->title}}"></a></li>
                @endfor
              </ul>
            </div>
            <div class="widget-content">
              <h3 class="title widget-title">
                Galeria OpenBless
              </h3>
              <a href="{{ url('/galerias') }}">
              <p>Confira nossos Eventos.</p>
              </a>
            </div>
          </div><!--/widget gallery-->
          
        </div><!--/second-content-->
  
        <div class="col-md-3 sidebar">
        <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                Links 
              </h4>
            </header>
            <div class="widget-content">
          @for ($i = 0; $i < 2; $i++)
              <ul class="list list-view">
                <li class="title"><a href="{{$noticia[$i]->getUrl1()}}">{{$noticia[$i]->title}}</a></li>
              </ul>
            @endfor
            </div>
          </div><!--/widget list-->

          <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                INSCREEVA-SE
              </h4>
            </header>
            <div class="widget-content">
              <ul class="media-list list">
                <li class="media">
                  <a href="#" class="pull-left">
                    <img src="img/weekly_ipad.png" alt="">
                  </a>
                  <div class="media-body">
                    
                    <p>Fique por dentro das nossas novidades.</p>
                  </div>
                </li>
              </ul>
            </div>
          </div><!--/widget single-->

          <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                PARCEIROS
              </h4>
            </header>
            <div class="widget-content">
              <ul class="media-list list">
                <li class="media">
                  <a href="#" class="pull-left">
                    <img src="img/blog_1.gif" alt="" class="media-object">
                  </a>
                  <div class="media-body">
                    <a class="title">
                      Centro do Empreendedor
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div><!--/widget list-->
        </div><!--/sidebar-->           
       
        <hr class="col-md-12 clearfix">
        
        <div class="col-md-12 headline">
          <div class="corousel-wrapper widget">
            <header class="widget-header">
              <h4 class="title">
                IMOVEIS RECENTES
              </h4>
            </header>
            <ul class="panel-list carousel">
             @foreach($imovel as $post)
              <li class="panel-item">
                <div class="col-inner">
                  <div class="panel-thumbnail pull-left">
                  <a href="{{$post->getUrl2()}}"">
                    <img class="open-imoveis" src="uploads/{{$post['image']}}" alt="{{$post['title']}}">
                    </a>
                  </div>
                  <div class="panel-content clearfix">
                    <span class="panel-title">
                      {{$post['title']}}
                    </span>
                  </div>
                </div>                
              </li>
             @endforeach   
            </ul>
          </div><!--/corousel-wrapper-->
        </div><!--/headline-->
      </div><!--/row-->
    </div><!-- /main-view -->

          
@stop
