
@extends('homepage')

@section('title', 'Cadastro de Usuário')


@section('content')

<form>
  <h1>Login</h1>  
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" placeholder="Email cadastrado">
  </div>
  <div class="form-group">
    <label for="password">Senha</label>
    <input type="password" class="form-control" placeholder="Senha">
  </div>
  
  <button type="submit" class="btn btn-primary">Entrar</button>
  <button type="submit" class="btn btn-secondary">Cadastrar-se</button>
</form> 

@endsection

