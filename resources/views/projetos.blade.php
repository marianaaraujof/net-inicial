@extends('templates/layout')
@section('cfg_title_path_0', 'Projetos')
@section('cfg_section_geral')
<main class="conteudoPrincipal">
<!-- <script>
    window.onscroll = function() {myFunction()};

    function myFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 40) {
            document.getElementById("colorchange").className = "corpreta fixed-top";
        } else {
            document.getElementById("colorchange").className = "";
        }
    }
</script> -->
    <div class="container">
        <h1 class="subtitulo">Projetos</h2>
        <h3 class="text-projetos text-left"> Abaixo estão listados os projetos desenvolvidos pelos alunos da Escola de Programação do LAIS (Laboratório de Inovação Tecnológica em Saúde) até o presente momento.
         Em sua maioria, os projetos são advindos de necessidades reais do sistema de saúde pública, prioritariamente para setores do Hospital Universitário Onofre Lopes, onde o laboratório está localizado. 
        O método de Aprendizado Baseado em Problemas é utilizado em todos os projetos, a fim de que os estudantes aprendam a programar resolvendo problemas reais da sociedade em que estão inseridos.  </h3> 
   
        <nav>
            <ul class="conteudoPrincipal-projetos">
                <li class="conteudoPrincipal-projetos-link"><a href="#"> Hera &nbsp <img class="img-box-atuacao" src="{{ asset('imgs/OK_icon.svg') }}"></a></li>
                <li class="conteudoPrincipal-projetos-link"><a href="#"> Neuroaudiologia &nbsp <img class="img-box-atuacao" src="{{ asset('imgs/Andamento_icon.svg') }}"></a></li>
                <li class="conteudoPrincipal-projetos-link"><a href="#"> Athena &nbsp <img class="img-box-atuacao" src="{{ asset('imgs/Andamento_icon.svg') }}"></a></li>
            </ul>
        </nav>
    </div>
</main>
@endsection