@extends('templates/layoutWelcome')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<body class="bgCor bgEstrelas">

<section id="main">

    <header class="mainHeader"> 
        <div="container">
            <div>
            <img src="{{asset('imgs/EP_logo_01.svg')}}"> </img>
            <img src="{{asset('/imgs/terra-06.png')}}"> </img>
            </div> 
        </div>       
    </header>

    <article class="mainArticle"> 
        <div class="container"> 
            
            <h1 class="textosArticle-Slogan"> Do nada ao <br /> infinito! </h1>

        </div>
    </article>    

    <aside class="mainAside"> 
        <div>

            <h1 class="textosAside-Subtitulo"> De onde, </h1>
            <h1 class="textosAside-Subtitulo"> e para onde? <h1> 

        </div>
    </aside>

</section>
</body>
@endsection
