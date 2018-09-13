@extends('templates/layout')
@section('cfg_title_path_0', 'Equipe')
@section('cfg_section_geral')
<div class="container-fluid box-geral-1">
    
    <div class="container-fluid-1"> 
 	    <h1 class="title-equipe text-left"><b>Equipe</b></h1>
        <h3 class="text-equipe text-left"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget pharetra nulla. Etiam non quam vestibulum, egestas erat consectetur, sollicitudin augue. Maecenas id eros ultricies, suscipit erat non, volutpat orci. </h3>
    </div>
    
    <div class="container-fluid-1">
    <!-- Informações de Pierre -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Pierre">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Pierre Freire</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenação </a>
                <a href="https://github.com/pierrefreire" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/PierreFreire</a>
                <a href="mailto:pierre.freire@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="pierre.freire@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Tecnólogo em Sistemas para Internet pela UNIVALI - Itajaí/SC, 
                é aluno de pós-graduação em Planejamento Estratégico em Comunicação pela UNP - Natal/RN. 
                Atualmente é analista de sistemas da SEDIS/UFRN onde desenvolve aplicações na área de mobile e web. 
                É apaixonado por tecnologia, usa Linux, Windows e Mac OS sem preconceitos. 
                Produtor de conteúdo para internet e desenvolve aplicativos para iOS e Windows Phone.</p>
            </div>
        </div>
        <!-- Informaoes de Danieli -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/danieli_1.gif') }}" alt="Foto de Danieli">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Danieli Rabelo</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenação Pedagógica</a>
                <a href="http://lattes.cnpq.br/7720315059620922" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Lattes_logo.svg') }}">&nbsp Lattes/DanieliRabelo</a>
                <a href="mailto:rabrlodanni@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="rabrlodanni@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Pesquisadora do Laboratório de Inovação Tecnológica em Saúde - LAIS/HUOL/UFRN. 
                Membro do Grupo de Pesquisa em Data Mining da UFRN. Mestranda do Programa de Pós-Graduação em Inovação em Tecnologias Educacionais - UFRN</p>
            </div>
        </div>
    </div>
    <div class="box-geral-2">
        <!-- Informacoes de Aisha -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/aisha_1.gif') }}" alt="Foto de Aisha">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Aisha Rabelo</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Design</a>
                <a href="http://lattes.cnpq.br/3125276410703049" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Lattes_logo.svg') }}">&nbsp Lattes/AishaRabelo</a>
                <a href="mailto:aisharabelo@hotmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="aisharabelo@hotmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Cursa o Bacharelado em Design pela Universidade Federal do Rio Grande do Norte.
                    Pesquisadora e Designer na Base de Pesquisa Escola de Programação do Laboratório de Inovação Tecnológica em Saúde (LAIS)</p>
            </div>
        </div>
        <!-- Informacoes de Deyvison -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/deyvison_1.gif') }}" alt="Foto de Deyvison">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Deyvison Silas</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Design</a>
                <a href="http://lattes.cnpq.br/5138193037942461" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Lattes_logo.svg') }}">&nbsp Lattes/DeyvisonSilas</a>
                <a href="mailto:deyvison_silas@outlook.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="deyvison_silas@outlook.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Aluno na Universidade Federal do Rio Grande do Norte (UFRN); graduando em design. Pesquisador e Designer na Base de Pesquisa Escola de Programação do Laboratório de Inovação Tecnológica em Saúde (LAIS).
                    O interesse pela criação surgiu ainda durante o ensino médio onde cursou o Open CG na escola de efeitos visuais Gracom; 
                    Adquirindo conhecimentos técnicos dos programas utilizados no design editorial, desenvolvimento para web, edição e animação.</p>
            </div>
        </div>
        <!-- Informacoes de Cleiton -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/cleiton_1.gif') }}" alt="Foto de Cleiton">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Cleiton Lima</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
                <a href="https://github.com/cleiton-lima" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/CleitonLima</a>
                <a href="mailto:antonio.lima@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="antonio.lima@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Técnico em Informática pelo Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte (IFRN), campus Pau dos Ferros. 
                    Graduando do Bacharelado em Tecnologia da Informação pelo Instituto Metrópole Digital (IMD) da Universidade Federal do Rio Grande do Norte (UFRN) e 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS). 
                    No LAIS, participa do projeto Escola de Programação atuando como pesquisador e desenvolvedor de sistemas.</p>
            </div>
        </div>
        <!-- Informacoes de Gabriel -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Generic placeholder image">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Gabriel Machado</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/gmachado" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/GabrielMachado</a>
                <a href="mailto:gmachado170@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="gmachado170@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduando do Bacharelado em Ciências e Tecnologia com ênfase em Engenharia de Materiais (UFRN). 
                Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN).</p>
            </div>
        </div>        
        <!-- Informacoes de Hercules -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/hercules_1.gif') }}" alt="Foto de Hercules">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Hercules Pedrosa</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
                <a href="https://github.com/herculespl" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/HerculesPedrosa</a>
                <a href="mailto:herculespedrosa95@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="herculespedrosa95@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduando em Engenharia Biomédica (UFRN). Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
                    Participação do programa Ciências Sem Fronteiras na Trinity College Dublin - Irlanda (2015 - 2016).</p>
            </div>
        </div>
        <!-- Informacoes de Luca -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Luca">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Luca Pareja</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/pierrefreire" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/LucaPareja</a>
                <a href="mailto:pierre.freire@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="pierre.freire@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduando do Bacharelado em Ciências e Tecnologia(UFRN). 
                Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN).</p>
            </div>
        </div>
        <!-- Informacoes de Mariana -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/mariana_1.gif') }}" alt="Foto de Mariana">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Mariana Araújo</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
                <a href="https://github.com/marianaaraujof" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MarianaAraujo</a>
                <a href="mailto:mariana.figueiredo@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="mariana.figueiredo@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduanda do Bacharelado em Ciências e Tecnologia com Ênfase em Tecnologia Mecânica (UFRN).
                    Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
                    Bolsista do suporte da plataforma AVASUS na Secretária de ensino a distancia (SEDIS) - 2016/2017.</p>
            </div>
        </div>
        <!-- Informacoes de Matheus Coutinho -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/coutinho_1.gif') }}" alt="Foto de Coutinho">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Matheus Coutinho</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
                <a href="https://github.com/matheus.ferreira" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MatheusCoutinho</a>
                <a href="mailto:matheus.ferreira@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="matheus.ferreira@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduando em Engenharia Mecânica (UFRN). 
                    Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Mecânica (UFRN). 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
                    Participante de projetos do LAIS na base da Bioengenharia ligados a modelagem e prototipagem rápida em 3D - 2014. 
                    Bolsista do suporte da plataforma AVASUS na Secretária de ensino a distancia (SEDIS) - 2015/2017.</p>
            </div>
        </div>
        <!-- Informacoes de Oliveira -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/oliveira_1.gif') }}" alt="Foto de Oliveira">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Matheus Oliveira</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
                <a href="https://github.com/matheusdsoliv" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MatheusOliveira</a>
                <a href="mailto:matheus.oliveira@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="matheus.oliveira@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduando em Engenharia Biomédica (UFRN). 
                    Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
                    Cursando a especialização em Engenharia Clínica. 
                    Participante de projetos do LAIS na base de análise de cargas sobre um fixador externo articulado utilizado para recuperação de fraturas no cotovelo.</p>
            </div>
        </div>
        <!-- Informacoes de Paula -->
        <div class="row">
            <div class="side">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/paula_1.gif') }}" alt="Generic placeholder image">
                    <!--<picture>
                        <source srcset="{{ asset('imgs/equipe/pierre_1.gif') }}" media="(min-width: 1000px)">
                        <source srcset="{{ asset('imgs/equipe/pierre_2.gif') }}" media="(min-width: 800px)">
                        <img srcset="{{ asset('imgs/equipe/pierre_3.gif') }}" alt="…">
                    </picture>-->
            </div>
            <div class="main">
                <h5 class="mt-0">Paula Torres</h5>
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
                <a href="https://github.com/torrespaula" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/PaulaTorres</a>
                <a href="mailto:paula.torres@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="paula.torres@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                <p>Graduando em Engenharia Biomédica (UFRN). 
                    Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
                    Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.</p>
            </div>
        </div>
    </div>


</div>
@endsection