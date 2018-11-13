@extends('templates/layoutWelcome')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<div class="container-wrap">
    <body class="bgCor">
    <div class="bgFaixasWelcomeDown"> </div>
        <div class="bgEstrelas">
            <div>
                <div class="bgLua"></div>
               <!-- <img src="{{asset('imgs/Foguete_img.svg')}}" class="FogueteWelcome"> -->
                <img src="{{asset('imgs/Sombra_img.svg')}}" class="sombraFoguete">
                    <section id="main">

                            <div class="containerMain">
                                    <div class="bgFaixasWelcomeUp"> </div>

                                    <header class="mainHeader"> 
                                
                                            <div class="LogoEP"> </div>
                                            <img src="{{asset('imgs/terra-06.png')}}" class="imgTerra">

                                    </header>

                                    <article class="mainArticle"> 
                                            
                                            <h1 class="textosArticle-Slogan"> Do nada ao infinito! </h1>

                                    </article>    
                            </div>

                            <aside class="mainAside"> 

                                    <h1 class="Aside-Subtitulo"> De onde, <strong> e para onde? </strong></h1>
                                    <p class="textosAside">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat lorem a lacus viverra feugiat. Etiam porta at erat vitae rhoncus. Maecenas non nisi luctus, interdum risus ac, condimentum ex. In imperdiet venenatis ipsum, et aliquet eros condimentum at. Aliquam accumsan sem mi. Ut maximus luctus suscipit. Etiam venenatis libero vitae bibendum vehicula. Ut luctus augue nec sapien feugiat, vitae scelerisque diam volutpat. Vestibulum elementum et mauris nec laoreet. Nullam hendrerit mi ligula, vel porta nibh interdum vitae. Suspendisse aliquam eu tortor at pulvinar. Fusce varius faucibus lectus id scelerisque. Nunc eu enim turpis. Etiam lacinia lacinia facilisis. Curabitur rutrum lobortis nisl. Ut ligula nisl, pellentesque nec maximus vitae, convallis ac arcu.</p>

                            </aside>

                            <article class="mainContainer">
                                
                                <div class="videoArticle">

                                  <!--  <video src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls> -->
                                    
                                </div>

                            </article>

                            <article class="conteudoFrases-Welcome">

                                    <div class="cardFrases-Welcome">
                                        <img src="{{asset('imgs/avatar.png')}}" style="width:60px">
                                        <div class="textoFrases-Welcome">
                                            <h4>"Lorem ipsum dolor sit amet, consectetuer"</h4>
                                            <p> (Lorem Ipsum) </p>
                                        </div>
                                    </div>

                                    <div class="cardFrases-Welcome">
                                        <img src="{{asset('imgs/avatar.png')}}" style="width:60px">
                                        <div class="textoFrases-Welcome">
                                            <h4>"Lorem ipsum dolor sit amet, consectetuer"</h4>
                                            <p> (Lorem Ipsum) </p>
                                        </div>
                                    </div>

                                    <div class="cardFrases-Welcome">
                                        <img src="{{asset('imgs/avatar.png')}}" style="width:60px">
                                        <div class="textoFrases-Welcome">
                                            <h4>"Lorem ipsum dolor sit amet, consectetuer"</h4>
                                            <p> (Lorem Ipsum) </p>
                                        </div>
                                    </div>

                            </article>

                            <article class="pblArea">
                                <div class="bgPBL">
                                    <h2 class="tituloPBL"> Problem Based Learning </h2>
                                </div>
                            </article>

                    </section>
            </div> 
        </div>       
    </body>
</div>    
@endsection
