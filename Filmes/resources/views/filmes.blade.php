<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Filmes
                </div>

                <form action="{{route('create.filme')}}">
                    <label for="nomefilme">Filme</label><input type="text" class="form-control" name="nomefilme" id="nomefilme">
                    <label for="autorfilme">Autor</label><input type="text" class="form-control" name="autorfilme" id="autorfilme">
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary">                    
                </form>

                <hr/>

                @foreach($filmes as $filme) 
                    <strong>{{$filme->nomefilme}}</strong>, de {{$filme->autorfilme}} 
                    <a href="{{route('detail.filme', ['id' => $filme->id])}}"><button type="button" class="btn btn-primary">Editar</button></a>
                    <a href="{{route('delete.filme', ['id' => $filme->id])}}"><button type="button" class="btn btn-danger">Excluir</button></a>
                    <br/><br/>
                @endforeach
            </div>
        </div>
    </body>
</html>
