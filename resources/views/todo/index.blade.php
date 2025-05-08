<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recomeço com Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="mt-5 mb-3">Lista de Tarefas</h1>

                <ul class="list-group">
                    @foreach ($listaDeTarefas as $item)
                    <li class="list-group-item">
                        {{ $item->descricao }} - <a class="btn btn-primary btn-sm" href="/editar/{{ $item->id }}">Editar</a>
                        | <a class="btn btn-danger btn-sm" href="/excluir/{{ $item->id }}">Excluir</a>
                    </li>
                    @endforeach
                </ul>

            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <h2 class="mt-5 mb-3">Cadastrar nova tarefa</h2>

                <form action="" method="post">
                    @csrf
                    <div class="mb-3">
                        <textarea class="form-control" id="tarefa" name="tarefa" rows="3">{{$tarefa->descricao ?? ""}}</textarea>
                        <button class="btn btn-success mt-3">Cadastrar</button>
                    </div>

                </form>
            </div>
        </div>


    </div>
</body>
</html>
