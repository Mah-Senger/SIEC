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
            if (confirm("Realmente deseja manifestar interesse em {{$vaga->titulo}}? \nA Empresa responsável será notificada e essa ação não poderá ser desfeita.") == true) {
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
        @if(session('erro'))
            <div class="alert alert-danger" role="alert">
                Você já manifestou interesse nessa vaga. Não é possível desfazer essa operação!
            </div>
        @endif
        <section class="w-75 m-auto pt-5">
        <div class="d-flex justify-content-between align-items-center mt-5 pt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center w-25">
                <img src="{{ asset('images/pessoas.png') }}" class="w-25">
                <h1 class="fs-1">{{$vaga->titulo}}</h1>
            </div>
            <div class="main-header-button">
                @if(isset($validacaoInteresse))
                    <button type="button" class="btn btn-secondary btn-lg" disabled >Manifestar interesse</button>
                @else
                    <button onclick="confirmarManifestacao()">Manifestar interesse</button>
                @endif
            </div>
        </div>
    
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Informações da vaga</h2>
            <div class="main-texto">
                <ul><h4>Empresa Responsável: {{$empresa->nome}}</h4></ul>
            </div>
            <div class="main-texto">
                <ul><h4>Descrição da vaga: {{$vaga->descricao}}</h4></ul>
            </div>
            <div class="main-texto">
                <h4>Requisitos e habilidades</h4>
                @foreach ($habilidades as $habilidade)
                    <p>{{$habilidade}}</p>
                @endforeach
            </div>
        </div>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Requisitos</h2>
            <p class="lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum ipsa tempore blanditiis vero quibusdam
                praesentium repellendus, suscipit sed aliquid, deleniti rem facilis consequatur ipsum sint illum provident.
                Error, nesciunt alias! Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, incidunt,
                cupiditate impedit labore nobis beatae dignissimos minus provident voluptatum quas quisquam optio harum aut
                reiciendis, corrupti sed recusandae culpa iure?</p>
        </div>
    </section>
    </main>
    <x-footer />
</body>
</html>