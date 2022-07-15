
<!-- Pagina principal dinamico -->

@extends('layout.main') 
@section('title', 'Github Name')
@section('content')
    <div class="container-home">
        <div class="content-home">
            <img  class="logo-home" src="{{  asset('storage/img/GithubLogo.png') }}" alt="logo" title="Git-hub Logo">
            <h1>Mostrar usuario y repositorios en Git-hub 💼 </h1>
            <form action="{{ route('home.form') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="github_name">Ingresar nombre de usuario: </label>
                    <input type="text" class="form-control" id="github_name" name="github_name" placeholder="Nombre">
                </div>
                <button type="submit" class="btn btn-warning">Buscar 🔎</button>
        </div>
    </div>
@endsection()
