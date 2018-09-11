@extends('templates/layoutWelcome')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<body class="bgCor bgEstrelas">
<div class="bgFaixasDown">
<div class="bgLua">
    <div>
        <div id="main-header">

            <div class="box-logo">
                <img src="{{asset('imgs/EP_logo_01.svg')}}"> </img>
            </div>
            
        <h1 id="frase"> Do nada ao <br /> infinito! </h1>
            
            <div>
                <h1 id="frase2"> De onde, </h1>
                <h1 id="frase3"> e para onde? <h1>
            </div>
        </div>
    </div>

    <div id="video" class="box-video bgSombraFog">
        <video src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls>
        </video>
    </div> 
</div>
    <div id="welcome" class="frasesInsp">
            <div class="media">
                    <img src="{{asset('imgs/avatar.png')}}" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading"></h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class=autores>(Lorem ipsum)</p>
            </div>

            <div class="media">
            <img src="{{asset('imgs/avatar.png')}}" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading"></h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class=autores>(Lorem ipsum)</p>
            </div>

            <div class="media">
                    <img src="{{asset('imgs/avatar.png')}}" class="media-object" style="width:60px">
            </div>
            <div class="media-body">
                <h4 class="media-heading"></h4>
                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class=autores>(Lorem ipsum)</p>
            </div>
            <div class="flex-container">
                <h1 class="pbl"><b>Problem <br /> Based <br /> Learning</b></h1> 
                <div class="box-pbl pblNumeros pblEtapas">
                    <div>
                        <p>1</p>
                        <h3>Hospital</h3>
                    </div>
                    <div>
                        <p>2</p>
                        <h3>Problema</h3>
                    </div>    
                    <div>
                        <p>3</p>
                        <h3>Tecnologia</h3>
                    </div>
                    <div>
                        <p>4</p>
                        <h3>Escola de Programação</h3>
                    </div>
                    <div>
                        <p>5</p>
                        <h3>Alunos</h3>
                    </div>
                    <div>    
                        <p>6</p>
                        <h3>Produto</h3>
                    </div>
                </div>
            </div>
    </div>

</div>
</body>
@endsection
