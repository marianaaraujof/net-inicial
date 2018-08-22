@extends('templates/layout')
@section('cfg_title_path_0', 'Inicio')
@section('cfg_section_geral')

<header id="main-header">
    <h1> Escola de programacao do lais </h1>
</header>
<div class="box-video">
    <video src="{{asset('video/EscolaDeProgramacao.mp4')}}" controls>
    </video>
</div>
@endsection



