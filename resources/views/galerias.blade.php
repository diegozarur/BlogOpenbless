@extends('blog.master')

@section('body')

<div class="fullslider-wrapper">
        <div class="slider-widget">
          <ul class="slider">
          @for ($i = 0; $i < 2; $i++)            
            <li><a href="{{$galeria[$i]->getUrl4()}}"><img class="open-galerias" src="uploads/{{$galeria[$i]->image}}" alt="{{$galeria[$i]->title}}"></a>
              <div class="widget-content caption-block">
                <div class="container">
                  <div class="row">
                    <h3 class="title widget-title">
                      {{$galeria[$i]->title}}
                    </h3>
                    <p class="slider-caption">{{substr(strip_tags($galeria[$i]->content), 0, 100)}}..</p>
                  </div>
                </div>
              </div>
            </li>  
            @endfor     
          </ul>
      </div><!--/slider-widget-->
    </div><!-- /fullslider-->
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


        <div class="post-container three-col-view container">

          <div class="col-md-7 col-md-push-2 news-post-format post-view content">
            <div class="post clearfix">

                <header class="page-header">
                  <div class="page-title">
                    <h2 class="title">{{$title}}</h2>
                    <div class="meta-wrapper">
                      <span class="sub-title">{{$title}}</span>
                    </div>
                  </div>
                </header>

                
				
               <div class="row card-list">
               @foreach($galeria as $imoveis)
                 <div class="col-md-6 card-item">                 
                   <div class="card-thumbnail">
                     <a href="{{$imoveis->getUrl4()}}"><img src="uploads/{{$imoveis['image']}}" alt="{{$imoveis['title']}}" class="thumbnail open-thumb"></a>
                     <div class="card-meta">
                       <ul class="list">
                         <li><a href="#"><i class="fa fa-heart"></i>12</a></li>
                         <li><a href="#"><i class="fa fa-comment"></i>3</a></li>
                       </ul>
                     </div>
                   </div>
                   <div class="col-inner">
                     <h4 class="title">
                       <a href="{{$imoveis->getUrl4()}}">{{$imoveis['title']}}</a>
                     </h4>
                     <p>{{substr(strip_tags($imoveis['content']), 0, 100)}}..</p>
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
                  Videos
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