@extends('blog.master')

@section('body')

<div class="container full-page">
      <div class="row">

        <!-- <div class="banner-view widget">
          <img src="img/ad.jpg" alt="">
        </div> -->

        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">{{$title}}</li>
          </ol>
        </div><!--/breadcrumb-wrapper-->


        <div class="post-container container">

          <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>


          <div class="col-md-9 news-post-format post-view content">
            <div class="post clearfix">

                <header class="page-header">
                  <div class="page-title">
                    <h1 class="title">Seja um Franqueado</h1>                    
                  </div>
                </header>

                <img  style="width: 785px; height: 325px;" src="{{asset ('img/logoOpenblessPortalImobiliario.jpg')}}" alt="" class="post-thumbnail">
                
                <div class="news-segment small">
                  <strong>OpenBless</strong>
                 <p><a href="#" class="alignleft"><img src="img/sejaUmFranqueado.jpg" alt="" class="alignleft" /></a></p>
            </div>
                <h2>Abra seu negócio</h2>
                <p>Participar do segmento de franquia, nos dias atuais, é sinônimo de rentabilidade, segurança e planejamento. Devido a isso, o setor de franquias cresceu 7,6% no primeiro trimestre de 2016, comparando-se ao ano de 2015, segundo a Associação Brasileira de Franchising (ABF).</p>                
                <p>E a história de progresso desse segmento permeia o Brasil, já que o faturamento entre os anos de 2003 e 2013 pulou de R$ 29 bilhões para R$ 115 bilhões. Como também, <strong> comparando aos dados de 2013, houve um aumento de 6,5% em 2014 para o número de empregos gerados, ou seja, </strong>as franquias geraram mais de um milhão de empregos, de acordo com a ABF.</p>

                <p>Além disso, ser um franqueado é a garantia de retorno do seu investimento em pouco tempo. Da mesma maneira, as franquias possibilitam estabilidade, pois o índice de permanência de empresas brasileiras até o quinto ano, sendo franquia, é de 15%. Uma diferença exorbitante ao índice normal de 60%, segundo dados obtidos no Portal Sua Franquia.</p>

                <p>Infere-se, pois, que a notoriedade deste ramo econômico, que surpreende qualquer crise, continuando a mudar vidas e economias.</p>

                <div class="col-md-9 news-post-format post-view content post clearfix">
                <h2>Mais Sobre a Franquia !!</h2>
                 <p>Gostaria de saber mais sobre a Franquia !!.</p>
                {!! Form::open(array('url' => 'enviar', 'class' => 'form')) !!}
                <div class="form-group">                   
                    {!! Form::text('nome', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Nome')) !!}
                  </div>                  
                  <div class="form-group">                   
                    {!! Form::text('email', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'Email')) !!}
                  </div>
                  <div class="form-group">                   
                    {!! Form::text('telefone', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'type'=>'tel',
                    'placeholder'=>'telefone')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::submit('Tenho Interesse!', 
                    array('class'=>'btn btn-primary')) !!}
                  </div>
                  {!! Form::close() !!}
                </div>

            </div><!--/post-->


          </div><!--/news-post-format-->
          <aside class="col-md-3 sidebar">
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
                  Noticias
                </h4>
              </header>
              <ul class="media list">
              @for ($i = 0; $i < 2; $i++)
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

        </div><!--/post-view-->

      </div><!--/full-page-->
    </div><!-- /main-view -->

@stop