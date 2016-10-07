@extends('blog.master')

@section('body')

<div class="container full-page">
      <div class="row">

        <!-- <div class="banner-view widget">
          <img src="img/ad.jpg" alt="">
        </div> -->

        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>
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
                @foreach($noticia as $post)
               <div class="list-item clearfix">
                 <div class="list-thumbnail col-md-4">
                   <img src="uploads/{{$post['image']}}" alt="{{$post['title']}}">
                 </div>
                  
                 <div class="list-inner col-md-8">
                   <h4 class="title">
                     <a href="{{$post->getUrl1()}}"> {{$post['title']}}</a>
                   </h4>
                   <div class="meta-wrapper">
                      <span class="meta"><i class="fa fa-calendar"></i> {{ $post->created_at->format('d M,Y ') }}</span>
                    </div>
                   <p>{{substr(strip_tags($post['content']), 0, 300)}}....</p>
                 </div>
               </div><!--/list-item-->  
                @endforeach
              </div>

              <footer class="page-footer clearfix">
                <div>
                  {!! str_replace('/?', '?', $noticia->render()) !!}
                </div>               
              </footer>
                
            </div><!--/post-->


          </div><!--/news-post-format-->

          <aside class="col-md-3 sidebar">

            <div class="widget">
              <header class="widget-header">
                <h4 class="title">
                  Links
                </h4>
              </header>
              <div class="widget-content">
                <ul class="media-list list">
                  <li class="media">
                    <div class="widget-content">
                      @for ($i = 0; $i < 3; $i++)
                      <ul class="list list-view">
                        <li class="title"><a href="{{$last[$i]->getUrl()}}">{{$last[$i]->title}}</a></li>
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