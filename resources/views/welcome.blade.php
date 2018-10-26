@extends('templates/layoutWelcome')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<body class="bgCor">
    <div class="bgEstrelas">
        <div >
            <div class="bgLua"></div>
                <div>

                    <section id="main">

                        <header class="mainHeader"> 
                    
                                <div class="LogoEP"> </div>

                        </header>

                        <article class="mainArticle"> 
                                
                                <h1 class="textosArticle-Slogan"> Do nada ao infinito! </h1>

                        </article>    

                        <aside class="mainAside"> 

                                <h1 class="textosAside-Subtitulo"> De onde, <strong> e para onde? </strong></h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse feugiat lorem a lacus viverra feugiat. Etiam porta at erat vitae rhoncus. Maecenas non nisi luctus, interdum risus ac, condimentum ex. In imperdiet venenatis ipsum, et aliquet eros condimentum at. Aliquam accumsan sem mi. Ut maximus luctus suscipit. Etiam venenatis libero vitae bibendum vehicula. Ut luctus augue nec sapien feugiat, vitae scelerisque diam volutpat. Vestibulum elementum et mauris nec laoreet. Nullam hendrerit mi ligula, vel porta nibh interdum vitae. Suspendisse aliquam eu tortor at pulvinar. Fusce varius faucibus lectus id scelerisque. Nunc eu enim turpis. Etiam lacinia lacinia facilisis. Curabitur rutrum lobortis nisl. Ut ligula nisl, pellentesque nec maximus vitae, convallis ac arcu.</p>

                        </aside>

                        <article class="mainContainer">
                            
                            <div class="videoArticle">

                                <video src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls>
                                
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

                    </section>

                </div>
            
        </div> 
    </div>       
</body>
@endsection
