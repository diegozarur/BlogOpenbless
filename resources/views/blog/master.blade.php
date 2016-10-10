<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>{{$title}} | {{ \Config::get('blog.title')}} </title>
		<link rel="icon" href="{{ asset('/img/favicon.ico') }}" />
    
    
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="google-site-verification" content="CqLA8k3ssWtq1-Vis3Ydy4glC7rPa7rjNP3udYcM6TE" />    
    <meta name="robots" content="index, follow" />    
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="keywords" content="Franquia Imobiliária, Imóveis, Imóveis à venda, Imóveis para aluguel, Aluguel, Locação, Imóveis, Rede Imobiliária, Imobiliárias,abrir imobiliaria, franquia imobiliaria, franquia, imobiliarias, imobiliaria openbless, imobiliarias em palhoça, imóveis na palhoça, imobiliaria em são jose, imóveis em são jose,imóveis em florianópolis, imobiliaria em florianopólis, imóveis em biguaçu, imobiliaria em biguaçu, lojas para alugar, lojas aluguel, casa aluguel, alugar casa em palhoça, alugar casa são josé, alugar apartamento na palhoça,alugar apartamento em são josé, locação apartamento, locação loft, lançamentos na planta" />
    <meta name="description" content="Com o Portal Open Bless, Alugar, Comprar e Vender imóveis e Anunciar. Locação e venda de: Casas e Apartamentos na Palhoça, São José, Florianópolis" />
    <meta name="language" content="pt-BR">
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{ asset ('/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset ('/css/widget.css') }}">
        <link rel="stylesheet" href="{{ asset ('/css/layout.css') }}">
        <script src="{{ asset ('/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js') }}"></script>
        <script id="dsq-count-scr" src="//www-openbless-com-br.disqus.com/count.js" async></script>
		
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
});
  </script>  
	</head>  
	<body >
  
  <div id="nav-topbar" class="nav-topbar">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <ul class="top-link menu top-bar-menu">
              <!-- <li><a href="#">INTERNATIONAL</a></li>
              <li><a href="#">U.S.</a></li>
              <li><a href="#">Japan</a></li>
              <li><a href="#">China</a></li> -->
            </ul>
          </div>
          <div class="col-md-6 col-sm-6">
            <ul class="social-icon-list menu top-bar-menu">
              <li>
                <form id="search-form" class="form-search form-horizontal">
                    <div class="input-append">
                        <input type="text" class="search-query" placeholder="">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                    </div>
                </form>
              </li>
              
              <li><a href="https://www.facebook.com/openbless"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://plus.google.com/103319178540033504609/posts"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="https://twitter.com/openbless"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="site-header">
      <div class="container">
        <div class="row">
          <div class="col-md-2">
            <h1 class="site-logo title">
            <a href="{{url('/')}}">
           <img src="{{asset ('/img/logo.png')}}">
           </a>
            </h1>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          </div>
          <nav id="main-menu" class="menu-wrapper col-md-10 collapse navbar-collapse">
            <ul class="menu nav navbar-nav">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<i class="fa fa-angle-down"></i></a>
                <ul class="children sub-menu dropdown-menu">
                  <li><a href="{{url('/noticias')}}">Noticias</a></li>
                  <li><a href="{{url('/blogs')}}">Blog</a></li>
                  <li><a href="{{url('/videos')}}">Videos</a></li>
                  <li><a href="{{url('/galerias')}}">Galeria</a></li>
                </ul>
              </li>
               <li><a href="{{url('/sobre')}}">Sobre OpenBless</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Franquias<i class="fa fa-angle-down"></i></a>
                <ul class="children sub-menu dropdown-menu">
                <li><a href="{{url('/porqueserfranqueado')}}">Por que ser Franqueado</a></li>
                <li><a href="{{url('/sejaumfranqueado')}}">Seja um Franqueado</a></li>
                <li><a href="{{url('/franquias')}}">Nossas Franquias</a></li>
                </ul>
              </li> 
               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Imóveis<i class="fa fa-angle-down"></i></a>
                <ul class="children sub-menu dropdown-menu">
                  <li><a href="{{url('/imoveis') }}">Nossos Imóveis</a></li>
                  <li><a href="#">Anúncie seu Imóvel</a></li>
                  <li><a href="#">Buscar Imóvel</a></li>
                  <li><a href="#">Feirão de Imóveis</a></li>
                </ul>
              </li>                
              <li><a href="#">OpenClub</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    @if(Session::has('message'))
    <div class="alert alert-info">
      {{Session::get('message')}}
    </div>
    @endif

	
            @yield('body')
<!-- rodapé com links -->
<div class="site-bottom hidden-xs">
      <div class="container">
        <div class="row">

          <div class="col-md-2 col-sm-4">
            <div class="widget footer-widget">
              <header class="widget-header">
                <h4 class="title">
                  Sobre a OpenBless
                </h4>
              </header>
              <div class="widget-content">
                <ul class="list list-view">
                  <li><a href="http://openbless.net.br/NossaHistoria.aspx">OpenBless</a></li>
                </ul>
              </div>
              <header class="widget-header">
                <h4 class="title">
                  Serviços
                </h4>
              </header>
              <div class="widget-content">
                <ul class="list list-view">
                  <li><a href="http://openbless.net.br/ImoAssociadas.aspx">Franquias</a></li>
                  <li><a href="http://openbless.net.br/ResultadoBusca.aspx">Buscar Imóveis</a></li>
                  <li><a href="http://openbless.net.br/Login.aspx">Anunciar seu Imóvel</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="widget footer-widget">
              <header class="widget-header">
                <h4 class="title">
                  Imóveis
                </h4>
              </header>
              <div class="widget-content">
                <ul class="list list-view">
                  <li><a href="http://openbless.net.br/ResultadoBusca.aspx?fin=1">Comprar </a></li>
                  <li><a href="http://openbless.net.br/ResultadoBusca.aspx?fin=2">Alugar</a></li>
                  <li><a href="http://openbless.net.br/ResultadoBusca.aspx?fin=3">Temporada</a></li>
                  <li><a href="http://openbless.net.br/ResultadoBusca.aspx?fin=1&nov=95">Lançamentos</a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-2 col-sm-4">
            <div class="widget footer-widget">
              <header class="widget-header">
                <h4 class="title">
                  Portal Imobiliário
                </h4>
              </header>
              <div class="widget-content">
                <ul class="list list-view">
                  <li><a href="http://openbless.net.br/Contato.aspx">Inscreeva-se</a></li>
                  <li><a href="www.openbless.com.br">Blog</a></li>
                  <li><a href="www.openblessimoveis.com.br">Imóveis</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="widget footer-widget">
              <header class="widget-header">
                <h4 class="title">
                  OpenClub
                </h4>
              </header>
              <div class="widget-content">
                <ul class="list list-view">
                  <li><a href="#">Sobre a OpenClub</a></li>
                  <li><a href="#">Novidades</a></li>
                  <li><a href="#">Investimento</a></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-2 col-sm-4">
            <div class="widget footer-widget">
              <header class="widget-header">
                <h4 class="title">
                  Contato
                </h4>
              </header>
              <div class="widget-content">
                <ul class="list list-view">
                  <li><a href="http://openbless.net.br/Contato.aspx">Deixe sua Duvida</a></li>
                  <li><a href="#">Trabalhe Conosco</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-2 col-sm-4">
            <div class="widget footer-widget">
              <header class="widget-header">
                <h4 class="title">
                  Inscreva-se
                </h4>
              </header>
              <div class="widget-content">
                {!! Form::open(array('url' => 'enviar', 'class' => 'form')) !!}                
                  <div class="form-group">                  
                    {!! Form::text('email', null, 
                    array('required', 
                    'class'=>'form-control', 
                    'placeholder'=>'E-mail')) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::submit('Tenho Interesse!', 
                    array('class'=>'btn btn-primary')) !!}
                  </div>
                  {!! Form::close() !!}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!--/site-bottom-->

    <footer class="site-footer">
      <div class="container footer-view">
        <div class="row">

          <div class="col-md-6 col-sm-6 copyright">
            <span>openblessimoveis.com.br</span>
          </div>

          <div class="col-md-6 col-sm-6 footer-link">
            
          </div>

        </div><!--/footer-view .row-->
      </div><!--/footer-view-->
    </footer><!--/site-footer-->

            

    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80691991-1', 'auto');
  ga('send', 'pageview');

</script>

        
    <!-- Scripts -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>       
        <script>window.jQuery || document.write('<script src="{{asset ('/js/vendor/jquery-1.10.1.min.js') }}"><\/script>')</script>
        <script src="{{asset ('/js/vendor/bootstrap.min.js') }}"></script>
        <!-- plugin js-->
        <script src="{{ asset('/js/jquery.bxslider.min.js') }}"></script>
        <script src="{{ asset ('/js/main.js') }}"></script>
      
	</body>
</html>