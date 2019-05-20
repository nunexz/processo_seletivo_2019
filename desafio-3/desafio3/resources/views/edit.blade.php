<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Desafio - Edit </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <h2>Edit A Form</h2><br  />
    <form method="post" action="{{action('UsuarioController@update', $id)}}">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="nome" value="{{$usuario->nome}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" value="{{$usuario->email}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="number">Senha:</label>
                <input type="text" class="form-control" name="senha" value="{{$usuario->senha}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Data : </strong>
                <input class="date form-control"  type="date" id="datepicker" name="dataNascimento" value="{{$usuario->dataNascimento}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-top:60px"><a href="{{ url('/usuarios') }}" class="btn btn-danger pull-right">Voltar</a></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success" style="margin-left:38px">Alterar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
