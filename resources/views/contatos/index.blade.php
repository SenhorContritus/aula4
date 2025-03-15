<html>
    <head>
        <style>
            td{
                width: 100px;
            }
            th{
                width: 100px;
            }
        </style>
    </head>
    <body>
        <h3>Visão contritus</h3>
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
                @foreach ($contatos as $contato)
                <tr>
                    <td>
                        {{ $contato['id'] }}
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
    </body>
</html>