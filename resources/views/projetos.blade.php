@extends('templates/layout')
@section('cfg_title_path_0', 'Projetos')
@section('cfg_section_geral')
<div class="container-fluid box-geral-1">
<div class="row">
    <section class="table-responsive container-fluid align-items-center justify-content-center text-center">
    <div class="container-fluid-1">    
        <h1 class="title-projetos text-left"><b>Projetos</b></h1>
        <h3 class="text-projetos text-left"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget pharetra nulla. Etiam non quam vestibulum, egestas erat consectetur, sollicitudin augue. Maecenas id eros ultricies, suscipit erat non, volutpat orci. </h3>
    </div>
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