@extends('templates/layout')
@section('cfg_title_path_0', 'Equipe')
@section('cfg_section_geral')

<div class="container-fluid">    
	
 	<h1 class="title-equipe text-left"><b>Equipe</b></h1>
    <h3 class="text-equipe text-left"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget pharetra nulla. Etiam non quam vestibulum, egestas erat consectetur, sollicitudin augue. Maecenas id eros ultricies, suscipit erat non, volutpat orci. </h3>
</div>
<div>
    <br />
    <div class="container cont-1 justify-content-center">
    <div class="media">
        <img class="mr-3 card-img clearfix rounded-circle" src="{{ asset('imgs/pipijobs.jpg') }}" alt="Generic placeholder image">
        <div class="media-body">
        <h5 class="mt-0">Pierre Freire</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenador </a>
        <a href="https://github.com/pierrefreire" class="btn btn-secondary">Github/pierrefreire</a>
        <a href="mailto:pierre.freire@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="pierre.freire@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <br />Tecnólogo em Sistemas para Internet pela UNIVALI - Itajaí/SC, 
        é aluno de pós-graduação em Planejamento Estratégico em Comunicação pela UNP - Natal/RN. 
        Atualmente é analista de sistemas da SEDIS/UFRN onde desenvolve aplicações na área de mobile e web. 
        É apaixonado por tecnologia, usa Linux, Windows e Mac OS sem preconceitos. 
        Produtor de conteúdo para internet e desenvolve aplicativos para iOS e Windows Phone.
    </div>
    </div>
</div>
    <div class="card">
        <img class="card-img left clearfix " src="{{ asset('imgs/pipijobs.jpg') }}" alt="Card image Pierre">
        <div class="card-body">
        <h5 class="card-title">Pierre Freire</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenador </a>
        <a href="https://github.com/pierrefreire" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/pierrefreire</a>
        <a href="mailto:pierre.freire@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="pierre.freire@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Tecnólogo em Sistemas para Internet pela UNIVALI - Itajaí/SC, 
        é aluno de pós-graduação em Planejamento Estratégico em Comunicação pela UNP - Natal/RN. 
        Atualmente é analista de sistemas da SEDIS/UFRN onde desenvolve aplicações na área de mobile e web. 
        É apaixonado por tecnologia, usa Linux, Windows e Mac OS sem preconceitos. 
        Produtor de conteúdo para internet e desenvolve aplicativos para iOS e Windows Phone.</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/danieli.jpg') }}" alt="Card image Danieli">
        <div class="card-body">
        <h5 class="card-title">Danieli Rabelo</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Coordenador Pedagógico</a>
        <a href="http://lattes.cnpq.br/7720315059620922" class="btn btn-secondary">Lattes/DanieliRabelo</a>
        <a href="mailto:rabrlodanni@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="rabrlodanni@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Pesquisadora do Laboratório de Inovação Tecnológica em Saúde - LAIS/HUOL/UFRN. 
        Membro do Grupo de Pesquisa em Data Mining da UFRN. Mestranda do Programa de Pós-Graduação em Inovação em Tecnologias Educacionais - UFRN</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/aisha.jpg') }}" alt="Card image Aisha">
        <div class="card-body">
        <h5 class="card-title">Aisha Rabelo</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Design</a>
        <a href="http://lattes.cnpq.br/3125276410703049" class="btn btn-secondary">Lattes/AishaRabelo</a>
        <a href="mailto:aisharabelo@hotmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="aisharabelo@hotmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Cursa o Bacharelado em Design pela Universidade Federal do Rio Grande do Norte.
         Pesquisadora e Designer na Base de Pesquisa Escola de Programação do Laboratório de Inovação Tecnológica em Saúde (LAIS)</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/deyvison.jpg') }}" alt="Card image Deyvison">
        <div class="card-body">
        <h5 class="card-title">Deyvison Silas</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Design</a>
        <a href="http://lattes.cnpq.br/5138193037942461" class="btn btn-secondary">Lattes/DeyvisonSilas</a>
        <a href="mailto:deyvison_silas@outlook.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="deyvison_silas@outlook.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Aluno na Universidade Federal do Rio Grande do Norte (UFRN); graduando em design. Pesquisador e Designer na Base de Pesquisa Escola de Programação do Laboratório de Inovação Tecnológica em Saúde (LAIS).
         O interesse pela criação surgiu ainda durante o ensino médio onde cursou o Open CG na escola de efeitos visuais Gracom; 
         Adquirindo conhecimentos técnicos dos programas utilizados no design editorial, desenvolvimento para web, edição e animação.</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/cleiton.jpg') }}" alt="Card image Cleiton">
        <div class="card-body">
        <h5 class="card-title">Cleiton Lima</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento)</a>
        <a href="https://github.com/cleiton-lima" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/CleitonLima</a>
        <a href="mailto:antonio.lima@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="antonio.lima@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Técnico em Informática pelo Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Norte (IFRN), campus Pau dos Ferros. 
        Graduando do Bacharelado em Tecnologia da Informação pelo Instituto Metrópole Digital (IMD) da Universidade Federal do Rio Grande do Norte (UFRN) e 
        Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS). 
        No LAIS, participa do projeto Escola de Programação atuando como pesquisador e desenvolvedor de sistemas.</p>
        </div>
    </div>
 
    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/hercules.jpg') }}" alt="Card image Hercules">
        <div class="card-body">
        <h5 class="card-title">Hercules Pedrosa</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/herculespl" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/HerculesPedrosa</a>
        <a href="mailto:herculespedrosa95@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="herculespedrosa95@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Graduando em Engenharia Biomédica (UFRN). Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
        Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
        Participação do programa Ciências Sem Fronteiras na Trinity College Dublin - Irlanda (2015 - 2016).</p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/leonardo.jpg') }}" alt="Card image Leonardo">
        <div class="card-body">
        <h5 class="card-title">Leonardo Negreiros</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/negreirosleo" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/LeonardoNegreiros</a>
        <a href="mailto:negreirosleo12@gmail.com" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="negreirosleo12@gmail.com" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Graduando em Engenharia Biomédica (UFRN). Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN).
        Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
        </p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/luisa.jpg') }}" alt="Card image Luisa">
        <div class="card-body">
        <h5 class="card-title">Luisa Barbalho</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/negreirosleo" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/LuisaBarbalho</a>
        <a href="mailto:luisa.barbalho@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="luisa.barbalho@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Graduanda em Engenharia Biomédica (UFRN). Bacharela em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN).
        Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN).
        Participação do programa Ciências Sem Fronteiras na Cardiff University - Reino Unido (2015 - 2016). 
        Bolsista do Programa de Educação Tutorial de Engenharia de Produção da UFRN (2014 - 2015). 
        </p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/mariana.jpg') }}" alt="Card image Mariana">
        <div class="card-body">
        <h5 class="card-title">Mariana Araújo</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/marianaaraujof" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MarianaAraujo</a>
        <a href="mailto:mariana.figueiredo@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="mariana.figueiredo@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text">Graduanda do Bacharelado em Ciências e Tecnologia com Ênfase em Tecnologia Mecânica (UFRN).
        Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS/HUOL/UFRN). 
        Bolsista do suporte da plataforma avasus na Secretária de ensino a distancia (SEDIS) - 2016/2017.
        </p>
        </div>
    </div>


    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/coutinho.jpg') }}" alt="Card image Matheus">
        <div class="card-body">
        <h5 class="card-title">Matheus Coutinho</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/matheus.ferreira" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MatheusCoutinho</a>
        <a href="mailto:matheus.ferreira@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="matheus.ferreira@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text"> 
        Graduando em Engenharia Mecânica (UFRN). 
        Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Mecânica (UFRN). 
        Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
        Participante de projetos do LAIS na base da Bioengenharia ligados a modelagem e prototipagem rápida em 3D. 
        Bolsista do suporte da plataforma avasus na Secretária de ensino a distancia (SEDIS) - 2016/2017.
        </p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/oliveira.jpg') }}" alt="Card image Matheus">
        <div class="card-body">
        <h5 class="card-title">Matheus Oliveira</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/matheusdsoliv" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/MatheusOliveira</a>
        <a href="mailto:matheus.oliveira@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="matheus.oliveira@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text"> 
        Graduando em Engenharia Biomédica (UFRN). 
        Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
        Pesquisador do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
        Cursando a especialização em Engenharia Clínica. 
        Participante de projetos do LAIS na base de análise de cargas sobre um fixador externo articulado utilizado para recuperação de fraturas no cotovelo.
        </p>
        </div>
    </div>

    <div class="card">
        <img class="card-img left clearfix" src="{{ asset('imgs/paula.jpg') }}" alt="Card image Paula">
        <div class="card-body">
        <h5 class="card-title">Paula Torres</h5>
        <a class="btn btn-light"><img class="img-box-atuacao" src="{{ asset('imgs/Curso_icon.svg') }}"> &nbsp Desenvolvimento</a>
        <a href="https://github.com/torrespaula" class="btn btn-secondary"><img class="img-box-atuacao" src="{{ asset('imgs/Git_logo.svg') }}">&nbsp Github/PaulaTorres</a>
        <a href="mailto:paula.torres@lais.huol.ufrn.br" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="paula.torres@lais.huol.ufrn.br" ><img class="img-box-atuacao" src="{{ asset('imgs/email_icon.svg') }}"></a>
        <p class="card-text"> 
        Graduando em Engenharia Biomédica (UFRN). 
        Bacharel em Ciências e Tecnologia com ênfase em Tecnologia Biomédica (UFRN). 
        Pesquisadora do Laboratório de Inovação Tecnológica em Saúde (LAIS) na base da escola de programação.
        </div>
    </div>

 			</div>
 		</div>
 	</div>

@endsection 

