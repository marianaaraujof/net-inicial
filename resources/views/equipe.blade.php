@extends('templates/layout')
@section('cfg_title_path_0', 'Equipe')
@section('cfg_section_geral')

<section class="conteudoPrincipal">

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

        <!-- Informações de Danieli -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Danieli">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Danieli Rabelo</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenação Pedagógica </a>
                <a href="http://lattes.cnpq.br/7720315059620922" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Lattes_logo.svg') }}">&nbsp Lattes/DanieliRabelo</a>
                <a href="mailto:rabrlodanni@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="rabrlodanni@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Pesquisadora do Laboratório de Inovação Tecnológica em Saúde - LAIS/HUOL/UFRN. 
                Membro do Grupo de Pesquisa em Data Mining da UFRN. Mestranda do Programa de Pós-Graduação em Inovação em Tecnologias Educacionais - UFRN</div>
            </div>
        </div>

        <!-- Informações de Aisha -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Aisha">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Aisha Rabelo</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Design </a>
                <a href="http://lattes.cnpq.br/3125276410703049" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Lattes_logo.svg') }}">&nbsp Lattes/AishaRabelo</a>
                <a href="mailto:aisharabelo@hotmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="aisharabelo@hotmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Cursa o Bacharelado em Design pela Universidade Federal do Rio Grande do Norte.
                    Pesquisadora e Designer na Base de Pesquisa Escola de Programação do Laboratório de Inovação Tecnológica em Saúde (LAIS)</div>
            </div>
        </div>


        <!-- Informações de Deyvison -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Deyvison">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Deyvison Silas</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Design </a>
                <a href="http://lattes.cnpq.br/5138193037942461" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Lattes_logo.svg') }}">&nbsp Lattes/DeyvisonSilas</a>
                <a href="mailto:deyvison_silas@outlook.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="deyvison_silas@outlook.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Aluno na Universidade Federal do Rio Grande do Norte (UFRN); graduando em design. Pesquisador e Designer na Base de Pesquisa Escola de Programação do Laboratório de Inovação Tecnológica em Saúde (LAIS).
                    O interesse pela criação surgiu ainda durante o ensino médio onde cursou o Open CG na escola de efeitos visuais Gracom; 
                    Adquirindo conhecimentos técnicos dos programas utilizados no design editorial, desenvolvimento para web, edição e animação.</div>
            </div>
        </div>


        <!-- Informações de Cleiton -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Cleiton">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Cleiton Lima</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/cleiton-lima" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/CleitonLima</a>
                <a href="mailto:antonio.lima@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="antonio.lima@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Técnico em Informática pelo Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte (IFRN), campus Pau dos Ferros. 
                    Graduando do Bacharelado em Tecnologia da Informação pelo Instituto Metrópole Digital (IMD) da Universidade Federal do Rio Grande do Norte (UFRN) e 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS). 
                    No LAIS, participa do projeto Escola de Programação atuando como pesquisador e desenvolvedor de sistemas.</div>
            </div>
        </div>


        <!-- Informações de Gabriel -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Gabriel">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Gabriel Machado</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/gmachado" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/GabrielMachado</a>
                <a href="mailto:gmachado170@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="gmachado170@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduando do Bacharelado em Ciências e Tecnologia com ênfase em Engenharia de Materiais (UFRN). 
                Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN).</div>
            </div>
        </div>

        <!-- Informações de Hercules -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Hercules">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Hercules Pedrosa</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/herculespl" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/HerculesPedrosa</a>
                <a href="mailto:herculespedrosa95@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="herculespedrosa95@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduando em Engenharia Biomédica (UFRN). Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
                    Participação do programa Ciências Sem Fronteiras na Trinity College Dublin - Irlanda (2015 - 2016).</div>
            </div>
        </div>

        <!-- Informações de Luca -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Luca">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Luca Pareja</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/lucapareja" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/LucaPareja</a>
                <a href="mailto:lucapareja1337@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="lucapareja1337@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduando do Bacharelado em Ciências e Tecnologia(UFRN). 
                Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN).</div>
            </div>
        </div>

        <!-- Informações de Mariana -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Mariana">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Mariana Araújo</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/marianaaraujof" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MarianaAraujo</a>
                <a href="mailto:mariana.figueiredo@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="mariana.figueiredo@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduanda do Bacharelado em Ciências e Tecnologia com Ênfase em Tecnologia Mecânica (UFRN).
                    Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
                    Bolsista do suporte da plataforma AVASUS na Secretária de ensino a distancia (SEDIS) - 2016/2017.</div>
            </div>
        </div>

        <!-- Informações de Coutinho -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Coutinho">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Matheus Coutinho</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/matheus.ferreira" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MatheusCoutinho</a>
                <a href="mailto:matheus.ferreira@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="matheus.ferreira@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduando em Engenharia Mecânica (UFRN). 
                    Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Mecânica (UFRN). 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
                    Participante de projetos do LAIS na base da Bioengenharia ligados a modelagem e prototipagem rápida em 3D - 2014. 
                    Bolsista do suporte da plataforma AVASUS na Secretária de ensino a distancia (SEDIS) - 2015/2017.</div>
            </div>
        </div>

        <!-- Informações de Oliveira -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Oliveira">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Matheus Oliveira</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/matheusdsoliv" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MatheusOliveira</a>
                <a href="mailto:matheus.oliveira@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="matheus.oliveira@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduando em Engenharia Biomédica (UFRN). 
                    Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
                    Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
                    Cursando a especialização em Engenharia Clínica. 
                    Participante de projetos do LAIS na base de análise de cargas sobre um fixador externo articulado utilizado para recuperação de fraturas no cotovelo.</div>
            </div>
        </div>

        <!-- Informações de Paula -->
        <div class="conteudoEquipe">
            <div class="conteudoEquipe-foto">
                <img class="mr-3 clearfix img-responsive" src="{{ asset('imgs/equipe/pierre_1.gif') }}" alt="Foto de Paula">
            </div>
            <div class="conteudoEquipe-informacoes">
                <h4 class="conteudoEquipe-nome">Paula Torres</h4>
                <div class="conteudoEquipe-links">
                <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento </a>
                <a href="https://github.com/torrespaula" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/PaulaTorres</a>
                <a href="mailto:paula.torres@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="paula.torres@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
                </div>
                <div class="conteudoEquipe-texto">Graduando em Engenharia Biomédica (UFRN). 
                    Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
                    Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.</div>
            </div>
        </div>

    </div>

</section>
@endsection