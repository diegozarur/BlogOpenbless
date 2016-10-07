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
            <li class="active">{{ $title }}</li>
          </ol>
        </div><!--/breadcrumb-wrapper-->


        <div class="post-container three-col-view container">

          <div class="col-md-7 col-md-push-2 news-post-format post-view content">
            <div class="post clearfix">

                <header class="page-header">
                  <div class="page-title">
                    <h2 class="title">{{ $title }}</h2>
                    <div class="meta-wrapper">
                      <span class="sub-title">{{ $title }}</span>
                    </div>
                  </div>
                </header>

                
				
               <div class="row card-list">
               @foreach($video as $videos)
                 <div class="col-md-6 card-item">                 
                   <div class="card-thumbnail">
                     <a href="{{$videos->getUrl3()}}"><div class="video-wrapper">
                      {!!$videos['subtitle'] !!}
                  </div></a>
                     <div class="card-meta">
                       <div class="widget-content">
                <div class="share-view margin-top-20">
                  <a target="_blank" href="{{ Config::get('app.url')  .'/share/'. $videos['id']}}/facebook"><i class="fa fa-facebook-square"></i></a>
                  <a target="_blank" href="{{ Config::get('app.url')  .'/share/'. $videos['id']}}/twitter"><i class="fa fa-twitter-square"></i></a>
                  <a target="_blank" href="{{ Config::get('app.url')  .'/share/'. $videos['id']}}/googlePlus"><i class="fa fa-google-plus-square"></i></a>                                   
                </div>
              </div>
                     </div>
                   </div>
                   <div class="col-inner">
                     <h4 class="title">
                       <a href="{{$videos->getUrl3()}}">{{$videos['title']}}</a>
                     </h4>
                     <p>{{substr(strip_tags($videos['content']), 0, 50)}}..</p>
                   </div>
                 </div><!--/card-item-->                 
                  @endforeach
               </div>
            </div><!--/post--> 
          </div><!--/news-post-format-->

          <aside class="col-md-2 col-md-pull-7 col-sm-6 second-sidebar"> 
            <div class="widget">
              <header class="widget-header">
                <h4 class="title">
                  Noticias
                </h4>
              </header>
              <ul class="media list">
              @for ($i = 0; $i < 4; $i++)
                <li class="media">
                  <div href="{{$noticia[$i]->getUrl1()}}" class="widget-thumbnail">
                    <a href="{{$noticia[$i]->getUrl1()}}" class="media-object"><img src="uploads/{{$noticia[$i]->image}}" alt="{{$noticia[$i]->title}}"></a>
                  </div>
                  <div class="media-body margin-top-10">
                    <div class="media-heading title">
                      <a href="{{$noticia[$i]->getUrl1()}}">{{$noticia[$i]->title}}</a>
                    </div>
                    <p class="small">{{substr(strip_tags($noticia[$i]->content), 0, 80)}}..</p>
                  </div>
                </li>
                @endfor
              </ul>
            </div>
          </aside>

          <aside class="col-md-3 col-sm-6 sidebar">

           
            <div class="widget">
              <header class="widget-header">
                <h4 class="title">
                  OpenBless Portal Imobiliário
                </h4>
              </header>
              <div class="margin-top-20">
                <ul class="media-list list">     
                @for ($i = 0; $i < 3; $i++)             
                  <li class="media">
                    <div class="title margin-bottom-10">
                      <a href="{{$last[$i]->getUrl()}}">{{$last[$i]->title}}</a>
                    </div>
                    <a href="{{$last[$i]->getUrl()}}" class="pull-left">
                    <img src="uploads/{{$last[$i]->image }}" alt="{{ $last[$i]->title}}" class="media-object">
                    </a>                   
                  </li>
                @endfor
                </ul>
              </div>
            </div><!--/widget list-->

             <div class="widget">
            <header class="widget-header">
              <h4 class="title">
                Fotos
              </h4>
            </header>
            <div class="widget-thumbnail corousel-wrapper">
              <ul class="slider">
              @for ($i = 0; $i < 3; $i++)
                <li><a href="{{$galeria[$i]->getUrl4()}}"><img src="uploads/{{$galeria[$i]->image}}" alt="{{$galeria[$i]->title}}"></a></li>
                @endfor
              </ul>
            </div>
            <div class="widget-content">
              <h3 class="title widget-title">
                Galeria OpenBless
              </h3>
              <a href="{{ url('/galerias') }}">
              <p>Veja Mais.</p>
              </a>
            </div>
          </div><!--/widget gallery-->

          </aside>

        </div><!--/post-view-->

      </div><!--/full-page-->
    </div><!-- /main-view -->


@stop
