<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Desafio 02</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form class="form-horizontal" method="get" action={{url('/')}}>
                            <div class="form-group">
                                <label for="name" class="col-lg-2 control-label">
                                    Filtrar
                                </label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="filtro">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button type="submit" class="btn btn-default">Pesquisar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Categoria</th>
                        <th>Título</th>
                        <th>Imagem</th>
                        <th>Texto</th>
                        <th>Data</th>
                        <th>Url</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($noticias as $noticia)
                        <tr>
                            <td>{{$noticia->id}}</td>
                            <td>{{$noticia->categoria}}</td>
                            <td>{{$noticia->titulo}}</td>
                            <td><img src="{{$noticia->imagem}}" alt="Imagem" style="width: 200px; height: 200px"></td>
                            <td>{{$noticia->texto}}</td>
                            <td>{{$noticia->data_formatada}}</td>
                            <td>{{$noticia->url}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="{{url('/1')}}">1</a></li>
                        <li class="page-item"><a class="page-link" href="{{url('/2')}}">2</a></li>
                        <li class="page-item"><a class="page-link" href="{{url('/3')}}">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </body>
</html>
