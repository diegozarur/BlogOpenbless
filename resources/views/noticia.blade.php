@extends('blog.master')

@section('body')

<div class="container full-page">
      <div class="row">

        <!-- <div class="banner-view widget">
          <img src="img/ad.jpg" alt="">
        </div> -->

        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li><a href="{{url('/')}}">Home</a></li>
            <li><a href="{{url('/noticias')}}">Noticias</a></li>
            <li class="active">{{$noticia['title']}}</li>
          </ol>
        </div><!--/breadcrumb-wrapper-->


        <div class="post-container container">

          <div class="col-md-9 blog-post-format post-view content">
            <div class="post clearfix">

                <header class="page-header">
                  <div class="page-title">
                    <h1 class="title">{{$noticia['title']}}</h1>
                    <div class="meta-wrapper">
                      <span class="meta"><i class="fa fa-pencil-square-o"></i>{{$noticia['author']}}</span>
                      <span class="meta"><i class="fa fa-calendar"></i>{{ $noticia->created_at->format('d M,Y ') }}</span>
                      
                    </div>
                  </div>
                </header>

                <img class="open-blog-single" src="{{url('uploads/'.$noticia['image'])}}" alt="{{$noticia['title']}}" class="post-thumbnail">
                <p>
                <div><h2 class="title">{{$noticia['subtitle']}}</h2></div>
                  <div style="color:{{$noticia['color']}}">{!! $noticia['content'] !!}</div>
                  </p>
            </div><!--/post-->

            <footer class="post-footer clearfix">             
            </footer>

              <div id="reply-view" class="reply clearfix margin-top-20">
                <header class="widget-header">
                  <h4 class="title">
                    Deixe seu Comentário
                  </h4>
                </header>

                <section class="content">
<div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = '{{\Config::get('blog.disqus')}}'; // required: replace example with your forum shortname
         var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
          };

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


    
    </section>

              </div>

          </div><!--/news-post-format-->

          <aside class="col-md-3 sidebar">

            <div class="widget">
              <header class="widget-header">
                <h4 class="title">
                  Compartilhe
                </h4>
              </header>
              <div class="widget-content">
                <div class="share-view margin-top-20">
                  <a target="_blank" href="{{ Config::get('app.url')  .'/blog/share3/'. $noticia['id']}}/facebook"><i class="fa fa-facebook-square"></i></a>
                  <a target="_blank" href="{{ Config::get('app.url')  .'/blog/share3/'. $noticia['id']}}/twitter"><i class="fa fa-twitter-square"></i></a>
                  <a target="_blank" href="{{ Config::get('app.url')  .'/blog/share3/'. $noticia['id']}}/googlePlus"><i class="fa fa-google-plus-square"></i></a>                                   
                </div>
              </div>
            </div>           
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
          </aside>

        </div><!--/post-view-->

      </div><!--/full-page-->
    </div><!-- /main-view -->

@stop