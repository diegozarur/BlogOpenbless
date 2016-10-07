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
                    <h2 class="title">Portal Imobiliário OpenBless</h2>                    
                  </div>
                </header>

                <img src="{{asset ('img/logo.png')}}" alt="" class="post-thumbnail">
                
                <div class="news-segment small">
                  <strong>OpenBless</strong>
                  <ul class="list">
                    <li>"Realizando sonhos com inovação e modernidade"</li>
                    <li>"com o propósito de ser um meio para aquele que deseja encontrar o local perfeito para se viver ou para investir"</li>
                    <li>"a fim de garantir que os empreendimentos preencham os requisitos técnicos e humanísticos que visam à garantia do investimento."</li>
                  </ul>
                  <p><a href="#" class="alignleft"><img src="img/quemSomos.jpg" alt="" class="alignleft" /></a></p>
                </div>
                <h5>Nossa História</h5>
                <p>A OpenBless teve o início em 1998, como sua atividade principal voltada ao ramo da tecnologia.  Em 2010, a empresa se voltou ao mercado imobiliário e a primeira iniciativa foi um projeto para a criação de um portal imobiliário, que seria uma central de negócios de imóveis, com o propósito de ser um canal de oportunidade para clientes, empresas e profissionais do ramo imobiliário. Assim, o portal seria um facilitador para quem busca seu imóvel, seja na opção de locação ou compra, sempre com a opção de obter assessoria de um profissional qualificado, através da rede de corretores e imobiliárias franqueadas, dessa forma garantindo a satisfação de todos os usuários do portal. 
                </p>                
                <p><strong>"Realizando sonhos com inovação e modernidade"</strong></p>
                <p>Dessa maneira, a OpenBless, foi criada com o propósito de ser um meio para aquele que deseja encontrar o local perfeito para se viver ou para investir. Sendo assim, nosso compromisso diário é ser um canal de realização de sonhos, sejam eles, adquirir o seu primeiro imóvel ou proporcionar meios de investimentos com segurança e garantia de bons resultados. Uma vez que, historicamente oferece aos seus investidores a garantia de ganhos e rentabilidades iguais ou acima de qualquer outro do mercado.</p>

               <p><strong>Objetivo</strong></p>

                <p>Oferecer aos nossos clientes, parceiros e fornecedores a oportunidade de conhecer empreendimentos que preenchem todas as suas expectativas. Em que, sempre haverá um cuidado da equipe técnica no estudo prévio, a fim de garantir que os empreendimentos preencham os requisitos técnicos e humanísticos que visam à garantia do investimento.</p>
                <p><strong>Visão</strong></p>
                <p>Acreditar que, por meio de nosso trabalho, podemos ser um meio para aproximar pessoas e assim contribuir para suas conquistas.</p>

                <p><strong>Missão</strong></p>
                <p>Estar alinhado ao nosso tempo com tecnologia e inovação, assim superando os atuais e futuros desafios.</p>
                
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