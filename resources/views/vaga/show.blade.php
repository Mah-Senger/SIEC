<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$vaga->titulo}}</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina15.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <style></style>
    <script>
        function confirmarManifestacao() {
            if (confirm("Realmente deseja manifestar interesse em {{$vaga->titulo}}? \nA Empresa responsável será notificada.") == true) {
                window.location.href = "/vaga/interesseCreate/{{$vaga->id}}/3";
            }
        }
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
  <x-header />
    <main>
        @if(session('status'))
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">{{session('status')}}</h4>
                <hr>
                <p>Entraremos em contato com {{$empresa->nome}} para comunicar o seu interesse em {{$vaga->titulo}}. Estamos torcendo para que essa vaga seja sua. </p>
            </div>
        @endif
        <section class="main-header">
            <div class="main-header-titulo">
                <h1>{{$vaga->titulo}}</h1>
            </div>
            <div class="main-header-button">
                <button onclick="confirmarManifestacao()">Manifestar interesse</button>
            </div>
        </section>
        <section class="main-conteudo">
            <div class="main-texto">
                <h2>Empresa Responsável</h2>
                <p>{{$empresa->nome}}</p>
            </div>
            <div class="main-texto">
                <h2>Descrição da vaga</h2>
                <p>{{$vaga->descricao}}</p>
            </div>
            <div class="main-texto">
                <h2>Requisitos e habilidades</h2>
                @foreach ($habilidades as $habilidade)
                    <p>{{$habilidade}}</p>
                @endforeach
            </div>
            <div class="main-texto">
                <h2>Salário proposto</h2></h2>
                <p>R$ {{$vaga->salario}}</p>
            </div>
            <div class="main-texto">
                <h2>Carga horária mensal</h2>
                <p>{{$vaga->cargaHoraria}}</p>
            </div>
        </section>
    </main>
    <x-footer />
</body>
</html>