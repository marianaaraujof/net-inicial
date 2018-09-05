@extends('templates/layout')
@section('cfg_title_path_0', 'Equipe')
@section('cfg_section_geral')
<div class="container-fluid box-geral-1">
    
    <div class="container-fluid-1"> 
 	    <h1 class="title-equipe text-left"><b>Equipe</b></h1>
        <h3 class="text-equipe text-left"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget pharetra nulla. Etiam non quam vestibulum, egestas erat consectetur, sollicitudin augue. Maecenas id eros ultricies, suscipit erat non, volutpat orci. </h3>
    </div>
    
    <div class="container-fluid-1">
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Generic placeholder image">
            </div>
            <div class="main">
                <h5 class="mt-0">Pierre Freire</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenador </a>
                <a href="https://github.com/pierrefreire" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/pierrefreire</a>
                <a href="mailto:pierre.freire@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="pierre.freire@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Tecnólogo em Sistemas para Internet pela UNIVALI - Itajaí/SC, 
                é aluno de pós-graduação em Planejamento Estratégico em Comunicação pela UNP - Natal/RN. 
                Atualmente é analista de sistemas da SEDIS/UFRN onde desenvolve aplicações na área de mobile e web. 
                É apaixonado por tecnologia, usa Linux, Windows e Mac OS sem preconceitos. 
                Produtor de conteúdo para internet e desenvolve aplicativos para iOS e Windows Phone.</p>
            </div>
        </div>
    </div>


</div>
@endsection