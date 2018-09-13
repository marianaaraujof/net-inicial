@extends('templates/layout')
@section('cfg_title_path_0', 'Projetos')
@section('cfg_section_geral')
<div class="container-fluid box-geral-1">
<div class="row">
    <section class="table-responsive container-fluid align-items-center justify-content-center text-center">
    <div class="container-fluid-1">    
        <h1 class="title-projetos text-left"><b>Projetos</b></h1>
        <h3 class="text-projetos text-left"> Abaixo estão listados os projetos desenvolvidos pelos alunos da Escola de Programação do LAIS (Laboratório de Inovação Tecnológica em Saúde) até o presente momento. Em sua maioria, os projetos são advindos de necessidades reais do sistema de saúde pública, prioritariamente para setores do Hospital Universitário Onofre Lopes, onde o laboratório está localizado. 
O método de Aprendizado Baseado em Problemas é utilizado em todos os projetos, a fim de que os estudantes aprendam a programar resolvendo problemas reais da sociedade em que estão inseridos.    </div>
    </section>
    <div class="container justify-content-center" id="projcont">
        <div class="row">
            <div class="col-sm-4">
            <div class="card box-projeto rounded" style="width: 20rem;">
                <img class="card-img-top" src="..." alt="img-hera">
            <div class="card-body">
                <p class="card-title" id="proj">Hera &nbsp <img class="img-box-atuacao" src="{{ asset('imgs/OK_icon.svg') }}"></p>
            </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card box-projeto rounded" style="width: 20rem;">
                <img class="card-img-top" src="..." alt="img-neuro">
            <div class="card-body">
            <p class="card-title" id="proj">Neuroaudiologia &nbsp <img class="img-box-atuacao" src="{{ asset('imgs/Andamento_icon.svg') }}"></p>
            </div>
            </div>
            </div>
            <div class="col-sm-4">
            <div class="card box-projeto rounded" style="width: 20rem;">
                <img class="card-img-top" src="..." alt="img-athena">
            <div class="card-body">
            <p class="card-title" id="proj">Athena &nbsp <img class="img-box-atuacao" src="{{ asset('imgs/Andamento_icon.svg') }}"></p>
            </div>
            </div>
            </div>
            
        </div>
        <br /><br /><br /><br /><br />
    </div>
</div> 
</div>
@endsection