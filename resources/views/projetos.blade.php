@extends('templates.template1')
@section('eplais')
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">Início</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/inicial">Quem Somos</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/equipe">Equipe</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href="/projetos">Projetos</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="/qualidade">Manual de Qualidade</a>
    </li>
	<li class="nav-item">
      <a class="nav-link" href="/cursos">Cursos</a>
    </li>
  </ul>
</nav>
<div class="container-fluid">    
 		<div class="row">
 			<div class="col-md-4">
 			</div>
 			<div class="col-md-4">
 				<h1 class="text-center">Projetos</h1>   
                </br>
                <h3> Zeus </h3>
                </br>
                <h3> Hera </h3>
                </br>
                <h3> Tasks </h3>
                </br>
             </div>
        </div>
</div>

@endsection