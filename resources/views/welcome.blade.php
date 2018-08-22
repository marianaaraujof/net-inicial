@extends('templates/layout')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<body id="welcome">
<div>
    <div id="main-header">
        <h1 id="frase"> Do nada ao <br /> infinito! </h1>
        <h1> Escola de programacao do lais </h1>
    </div>

    <span class="bg-cor"></span>
    <span class="bg-estrelas"></span>

    <div class="box-video">
        <video src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls>
        </video>
    </div> 
</div>
<body>
@endsection



