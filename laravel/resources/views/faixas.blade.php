@extends('homepage')

@section('content')

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Faixa</th>
            <th scope="col">Nome da Faixa</th>
            <th scope="col">Duração</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>

            @forelse($faixas as $faixa)
                <tr>
                    <td>{{ $faixa->faixa }}</td>
                    <td>{{ $faixa->nome }}</td>
                    <td>{{ $faixa->duracao }}</td>
                    <td>
                        <button>
                            <a href="/excluir-faixa/{{$faixa->id}}/{{$faixa->album_id}}">
                                Excluir faixa
                            </a>
                        </button>
                    </td>
                </tr>

                @empty
                <div>Nenhuma faixa cadastrada</div>   
                
            @endforelse   

    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <button>
                    <a href="/cadastrar-faixa/{{ $idAlbum }}">Adicionar faixa</a>
                </button>
            </td>
        </tr>
    </tfoot>
</table>


@endsection