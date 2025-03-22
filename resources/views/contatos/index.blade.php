@extends("layouts.main")

@section('title', "view pogger")


@section("content")
    <div>
        <table border="1" >
            <tr>
                <th>
                    Id
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Telefone
                </th>
            </tr>               
            @foreach ($contatos as $contato)<!-- for each que mostra cada linha da matriz contatos utilizando a variavel contato-->
            <tr>
                <td>
                    {{ $contato['id'] }}<!--mostra o valor desejado com base no nome declarado na matriz-->
                </td>
                <td>
                    {{ $contato['nome'] }}
                </td>
                <td>
                    {{ $contato['cel'] }}
                </td>
            </tr>
            @endforeach           
        </table>
    </div>

@endsection



