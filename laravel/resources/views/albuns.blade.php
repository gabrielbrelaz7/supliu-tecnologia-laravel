@extends('homepage')

@section('content')

<table class="table">
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
                        <a href="/excluir-album/{{ $album->id }}">Excluir Album</a>
                    </button>
                </td>
            </tr>
        @endforeach    
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href="/cadastrar-album">Adicionar álbum</a>
                </button>
            </td>
        </tr>
    </tfoot>
</table>


@endsection