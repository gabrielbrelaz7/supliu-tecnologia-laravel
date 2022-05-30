@extends('homepage')

@section('title', 'Cadastro de Faixas')


@section('content')

<form action="/faixas" method="POST">
  @csrf
  <h1>Cadastro de Faixa</h1>  
  <div class="form-group">
    <label for="faixa">Faixa</label>
    <input type="number" name="faixa" class="form-control" placeholder="Número da faixa">
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control" placeholder="Nome da faixa">
  </div>
  <div class="form-group">
    <label for="duracao">Nome</label>
    <input type="text" name="duracao" class="form-control" placeholder="Duração da faixa">
  </div>

  <input type="hidden" name="album_id" value="{{ $idAlbum }}">  
  
  <input type="submit" class="btn btn-primary" value="Cadastrar Faixa">
</form> 

@endsection