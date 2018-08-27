@extends('templates/layout')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<body id="welcome" class="bgCor bgEstrelas">
<div>
    <div id="main-header">
    <br />
        <div class="box-logo">
            <img src="{{asset('imgs/EP_logo_01.svg')}}"> </img>
        </div>
        <br />
        <h1 id="frase"> Do nada ao <br /> infinito! </h1>
        <br />
        <div>
            <h1 id="frase2"> De onde, </h1>
            <h1 id="frase3"> e para onde? <h1>
        </div>
    </div>


    <div class="box-video bgNuvem">
        <video src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls>
        </video>
    </div> 
</div>
</body>
@endsection



