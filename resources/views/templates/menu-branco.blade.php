<!DOCTYPE html>
<html lang="en">
    <head>
       @include('templates/common-head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light sticky-top mr-2" style="height: 120px; background-color: #FCFAFF; margin-right: 60px;">
        <a class="navbar-brand justify-content-start" href="#">
            <img src="{{ asset('imgs/EP_logo_03.svg') }}" width="80" height="80" alt="logo_ep">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item nav-estilo">
                <a class="nav-link" href="/">Início</a>
            </li>
            <li class="nav-item nav-estilo">
                <a class="nav-link" href="/equipe">Equipe</a>
            </li>
            <li class="nav-item nav-estilo">
                <a class="nav-link" href="/projetos">Projetos</a>
            </li>
        </ul>
        </div>
        </nav>
</body>
</html>