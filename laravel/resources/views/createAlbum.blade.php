@extends('homepage')

@section('title', 'Cadastro de Album')


@section('content')

<form action="/albuns" method="POST">
  @csrf
  <h1>Cadastro de Álbum</h1>  
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome do Álbum">
  </div>
  <div class="form-group">
    <label for="ano">Ano</label>
    <input type="text" name="ano" class="form-control" placeholder="Ano de lançamento">
  </div>
  
  <input type="submit" class="btn btn-primary" value="Cadastrar Álbum">
</form> 

@endsection