@extends('homepage')

@section('content')

<div class="topo">
        <div class="search-bar">
                <form action="/" method="GET">
                    <input type="text" class="form-control" id="pesquisa "name="pesquisa" placeholder="Digite uma palavra chave">
                    <input type="submit" class="btn btn-primary" value="Procurar">
                </form>
        </div>

        <div class="py-4">
            <button class="btn btn-dark" onclick="addAlbum()">
                Adicionar álbum
            </button>
        </div>
</div>

@if(count($albuns) === 0)
    <div class="msg"> Nenhum álbum encontrado!</div>
@endif

<div class="form-album">
    <form action="/albuns" method="POST">
        @csrf
        <div class="add-album">
        </div>
    </form>
</div>


@foreach($albuns as $album)


    <div class="card">
        <div class="card-header font-weight-bold">
            <div>
            Álbum: {{ $album->nome }}, {{ $album->ano }}
            </div>
            <div>
                <button class="ver-faixas btn btn-light">
                    <a href="/faixas/{{$album->id}}">Ver Faixas</a>
                </button>
                <button class="btn btn-light" onclick="addFaixa({{ $album->id }})">
                    Adicionar faixa
                </button>
                <button class="btn btn-light">
                    <a href="/excluir-album/{{ $album->id }}">Excluir Album</a>
                </button>
            </div>
        </div>
        <div class="card-body">

            <div class="d-flex py-4">
                <div class="px-4">N°</div>
                <div class="px-2">Faixa</div>
                <div class="ml-auto pr-5 px-2">Duração</div>
            </div>

            @foreach($faixas as $faixa)

                @if($faixa->album_id === $album->id)
                    <div class="d-flex">
                        <div class="px-4 py-1">{{ $faixa->faixa }}</div>
                        <div class="px-4 py-1">{{ $faixa->nome }}</div>
                        <div class="ml-auto py-1 px-2">
                            {{ $faixa->duracao }}
                                <button class="btn btn-default btn-xs ml-5">
                                    <a href="/excluir-faixa/{{ $faixa->id }}">X</a>
                                </button>
                        </div>
                    </div>

                @endif

            @endforeach 
        </div>

        <div>

        <form action="/faixas" method="POST">
            @csrf
            <input type="hidden" name="album_id" value="{{ $album->id }}">
            <div class="form-faixa add-faixa-{{ $album->id }}">
            </div>
        </form>
        </div>
    </div>

@endforeach 


{{-- Caso utilize modelo de tabela no sistema --}}
<!-- <table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Album</th>
            <th scope="col">Ano de Lançamento</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($albuns as $album)
            <tr>
                <td>{{ $album->nome }}</td>
                <td>{{ $album->ano }}</td>
                <td>
                    <button>
                        <a href="/faixas/{{ $album->id }}">Ver Faixas</a>
                    </button>
                    <button>
                        <a href="/excluir-album/{{ $album->id }}">Excluir Álbum</a>
                    </button>
                </td>
            </tr>
        @endforeach    
    </tbody>
</table> -->


@endsection