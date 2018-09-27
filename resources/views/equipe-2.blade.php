@extends('templates/layout')
@section('cfg_title_path_0', 'Equipe')
@section('cfg_section_geral')

<main class="conteudoPrincipal">

    <div class="container">
    
        <h1 class="subtitulo"> Equipe </h1>
        <h3 class="text-projetos"> Esta é a equipe que, atualmente, compõe a Escola de Programação do LAIS. 
        A estrutura da equipe é formada por um coordenador técnico, que auxilia os estudantes em técnicas e aperfeiçoamentos em desenvolvimento de sistemas, 
        uma coordenadora pedagógica, que gerencia a aplicação do método ABP dentro da Escola, bolsistas graduandos do curso de Design, 
        que auxiliam na interface de todos os produtos e bolsistas de diversos cursos da área tecnológica, 
        como Tecnologia da Informação, Ciências e Tecnologia, Engenharia Biomédica e Engenharia Mecânica que aprendem e desenvolvem sistemas. 
        Toda a equipe trabalha em conjunto a fim de obter aprendizados mútuos e diversos. </h3>

        <!-- Informações de Pierre -->
        <div class="conteudoEquipe">
        <div class="conteudoEquipe-foto">
            <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Pierre">
        </div>
        <div class="conteudoEquipe-informacoes">
            <h4 class="conteudoEquipe-nome">Pierre Freire</h4>
            <div class="conteudoEquipe-links">
            <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenação </a>
            <a href="https://github.com/pierrefreire" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/PierreFreire</a>
            <a href="mailto:pierre.freire@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="pierre.freire@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
            </div>
            <div class="conteudoEquipe-texto">Tecnólogo em Sistemas para Internet pela UNIVALI - Itajaí/SC, 
            é aluno de pós-graduação em Planejamento Estratégico em Comunicação pela UNP - Natal/RN. 
            Atualmente é analista de sistemas da SEDIS/UFRN onde desenvolve aplicações na área de mobile e web. 
            É apaixonado por tecnologia, usa Linux, Windows e Mac OS sem preconceitos. 
            Produtor de conteúdo para internet e desenvolve aplicativos para iOS e Windows Phone.</div>
        </div>
        </div>


    </div>

</main>