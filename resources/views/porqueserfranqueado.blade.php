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

          <div class="col-md-9 news-post-format post-view content">
            <div class="post clearfix">

                <header class="page-header">
                  <div class="page-title">
                    <h1 class="title">Por que ser um franqueado OpenBless?</h1>                    
                  </div>
                </header>

                <img src="{{asset ('img/openblessFranquia.jpg')}}" alt="Franquia Imobiliária" class="post-thumbnail">
                
                <div class="news-segment small">
                  <strong>OpenBless</strong>
                 <p><a href="#" class="alignleft"><img src="img/porqueSerumFranqueado.jpg" alt="Porque Ser um Franqueado" class="alignleft" /></a></p>
                </div>
                <h2>Por que ser um franqueado OpenBless?</h2>
                <p>A OpenBless oferece a retaguarda necessária para que sua franquia seja um sucesso. Dessa maneira, quem for franqueado OpenBless possui um suporte na execução de diversas rotinas administrativas, escrituração contábil e assessoria Jurídica. Com esse suporte, cada franqueado pode focar-se apenas na atividade principal, que é a venda e o atendimento ao cliente.</p>                
                
                <p>A central de atendimento possibilita que todo o fluxo de telefone, atendimento online, email e agenda sejam centralizados e distribuídos para os Fraqueados conforme região de atuação. Como também, a OpenBless oferece treinamento para o Franqueado e sua equipe, que possui acesso a treinamentos voltados ao desenvolvimento e aprimoramento contínuo de toda equipe. Assim, obtendo técnicas e a motivação necessária para garantir o sucesso.</p>
                <p>Outro aspecto é o marketing, uma vez que a velocidade do mundo moderno cresce a cada dia, por isso existe a necessidade das empresas e profissionais de possuírem um planejamento de Marketing, contendo uma estratégia que possibilite a rápida adaptação às necessidades, que, por sua vez, ocasionam constantes mudanças. Assim, como o Marketing, a comunição deve estar sempre em sintonia com as demandas estruturais e com as tendências, para que se mantenha eficiente.</p>
                <p>No parâmetro tecnológico, nossa base conta com o que se possui de mais moderno em ferramentas de gestão. Com uma equipe própria e terceirizada, como também métodos e estudos contínuos, sistematizando todas as técnicas, instrumentos, processos e meios de aplicação. Para que, dessa forma, possamos sempre inovar e obter o domínio, portanto garantimos ao máximo todos os benefícios da tecnologia, em favor da nossa atividade. Com isso, proporcionando mais qualidade, segurança e rapidez em todos os processos da rede, sendo internos ou externos.</p>
                
                <p>Na História, nunca foi tão desafiador estabelecer relacionamentos de confiança, sendo que estamos experimentando novos modelos de nos relacionarmos. De maneira que, somos impulsionados pela a velocidade da tecnologia. Atenta a esta realidade, a <strong>OpenBless</strong>, possui um modelo de edição que mantém o preceito de elo relacional mais imediato de cada pessoa. Logo, proporcionando a velocidade de rede entre pessoas e preservando o elo e a confiança. </p>
                
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