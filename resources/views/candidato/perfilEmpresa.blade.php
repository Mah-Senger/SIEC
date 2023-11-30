<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$usuario->nome}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina15.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style></style>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-header />
    <section class="w-75 m-auto pt-5">
        <div class="d-flex justify-content-between align-items-center mt-5 pt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center w-25">
                <img src="{{ asset('images/pessoas.png') }}" class="w-25">
                <h1 class="fs-1">{{$usuario->nome}}</h1>
            </div>
        </div>

        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Endereço</h2>
            <p class="lh-base">Rua {{$empresa->ruaEnd}}, nº {{$empresa->numEnd}}. Bairro {{$empresa->bairroEnd}}, {{$usuario->cidade}}. CEP: {{$empresa->cepEnd}}.</p>
        </div><br>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Email</h2>
            <p class="lh-base">{{$usuario->email}}</p>
        </div><br>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Objetivos e História da Empresa</h2>
            <p class="lh-base">{{$empresa->objHistEmpresa}}</p>
        </div><br>

        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Recursos de acessibilidade oferecidos</h2>
            <table class="table table-hover">
            <thead>
                <tr class="table-info">
                    <th scope="col">Recurso de Acessibilidade</th>
                    <th scope="col">Possui ou Não Possui</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($recursosTratados as $recurso)
                <tr>
                    <th>{{$recurso['recursos']}}</th>
                    <td>{{$recurso['status']}}</td>
                </tr>
                @endforeach
            </tbody>
            </table>
            <div class="d-flex justify-content-between align-items-center">
                        <a href="#" style="text-decoration: none; margin-right: 20px;">
                          <div style="background-color: #265894; padding: 10px; border: none; border-radius: 10px; color: white;" class="EditarExcluir">
                            <span>Voltar</span>
                          </div>
                        </a>
                </div><br><br><br><br>
        </div>
    </section>

    
    <x-footer />
</body>
</html>