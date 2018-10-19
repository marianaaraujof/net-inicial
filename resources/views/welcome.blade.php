@extends('templates/layoutWelcome')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<body class="bgCor">
    <div class="bgEstrelas">
        <div >
            <div class="bgLua">
                <div>

                    <section id="main">

                        <header class="mainHeader"> 
                    
                                <img class="LogoEP" src="{{asset('imgs/EP_logo_01.svg')}}"> </img>

                        </header>

                        <article class="mainArticle"> 
                                
                                <h1 class="textosArticle-Slogan"> Do nada ao <br /> infinito! </h1>

                        </article>    

                        <aside class="mainAside"> 

                                <h1 class="textosAside-Subtitulo"> De onde, </h1>
                                <h1 class="textosAside-Subtitulo"> e para onde? </h1> 

                        </aside>

                        <conteudo class="mainContainer">
                            
                            <video class ="VideoContainer" src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls>

                        </conteudo>

                    </section>

                </div>
            </div>
        </div> 
    </div>       
</body>
@endsection
