<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <div class="col-md-12 text-center" style="margin-top:60px"><a href="{{ url('/usuarios/create') }}" class="btn btn-success text-center">Criar</a></div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Date</th>
            <th>Email</th>
            <th colspan="2">Ação</th>
        </tr>
        </thead>
        <tbody>

        @foreach($usuarios as $usuario)
            @php
                $date=$usuario['dataNascimento'];
            @endphp
            <tr>
                <td>{{$usuario['id']}}</td>
                <td>{{$usuario['nome']}}</td>
                <td>{{$date}}</td>
                <td>{{$usuario['email']}}</td>
                <td>{{$usuario['senha']}}</td>

                <td><a href="{{action('UsuarioController@edit', $usuario['id'])}}" class="btn btn-warning">Editar</a></td>
                <td>
                    <form action="{{action('UsuarioController@destroy', $usuario['id'])}}" method="post">
                        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Deletar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
