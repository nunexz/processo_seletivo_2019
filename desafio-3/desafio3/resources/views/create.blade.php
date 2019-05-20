<!DOCTYPE html>
<html>
<head>
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <meta charset="utf-8">
    <title>Desafio - Create  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h2>Criar Usuário</h2><br/>
    <form method="post" action="{{url('usuarios')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Nome">Nome:</label>
                <input type="text" class="form-control" name="nome">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Email">Email:</label>
                <input type="text" class="form-control" name="email">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Senha">Senha:</label>
                <input type="text" class="form-control" name="senha">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <strong>Data : </strong>
                <input class="date form-control"  type="date" id="datepicker" name="dataNascimento">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4" style="margin-top:60px"><a href="{{ url('/usuarios') }}" class="btn btn-danger pull-right">Voltar</a></div>
            <div class="form-group col-md-4" style="margin-top:60px">
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
            <div class="form-group col-md-4">

            </div>
        </div>
    </form>
</div>
</body>
</html>
