@extends('templates.template1')
@section('eplais')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Início</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/quemsomos">Quem Somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/equipe">Equipe</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/projetos">Projetos</a>
    </li>

	<li class="nav-item">
      <a class="nav-link active" href="/cursos">Cursos</a>
    </li>
  </ul>
</nav>
<div class="container-fluid">    
 		<div class="row">
 			<div class="col-md-4">
 			</div>
 			<div class="col-md-4">
 				<h1 class="text-center">Cursos</h1>
            </div>
        </div>
</div>

@endsection