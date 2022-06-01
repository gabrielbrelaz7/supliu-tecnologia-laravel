@extends('homepage')

@section('content')

{{-- Para versão mobile --}}


<div class="faixas">

    <div class="py-4">
                <button class="btn btn-dark"">
                <a href="/">Voltar para discografia</a>
                </button>
            </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">Faixa</th>
                <th scope="col">Duração</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>

                @forelse($faixas as $faixa)
                    <tr>
                        <td class="py-4">{{ $faixa->faixa }}</td>
                        <td class="py-4">{{ $faixa->nome }}</td>
                        <td class="py-4">{{ $faixa->duracao }}</td>
                        <td>
                            <button class="btn btn-light">
                                <a href="/excluir-faixa/{{$faixa->id}}">
                                    Excluir
                                </a>
                            </button>
                        </td>
                    </tr>

                    @empty

                    <div class="msg">Nenhuma faixa cadastrada!</div>   
                    
                @endforelse   

        </tbody>
    </table>


    @endsection

</div>