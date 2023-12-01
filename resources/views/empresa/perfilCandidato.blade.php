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
    <script>
        function confirmarManifestacao() {
            if (confirm("Realmente deseja manifestar interesse em {{$usuario->nome}}? \nO candidato será notificado e essa ação não poderá ser desfeita.") == true) {
                window.location.href = "/empresa/interesseCandidato/{{$usuario->id}}";
            }
        }
    </script>
</head>
<body>
    <x-header />
    @if(session('status'))
            <div class="alert alert-success"  id="sucessoMsg" role="alert">
                <h4 class="alert-heading">{{session('status')}}</h4>
                <hr>
                <p>Entraremos em contato com {{$usuario->nome}} para comunicar o seu interesse nele. Estamos torcendo para que esse interesse seja recíproco.</p>
            </div>
        @endif
        @if(session('erro'))
            <div class="alert alert-danger" role="alert">
                Você já manifestou interesse nessa vaga. Não é possível desfazer essa operação!
            </div>
        @endif
    <section class="w-75 m-auto pt-5">
        <div class="d-flex justify-content-between align-items-center mt-5 pt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center w-75">
                <div class="d-flex justify-content-between align-items-center">
                    <img src="{{ asset('images/pessoas.png') }}" style="width: 150px;">
                    <h1 class="fs-1">{{$usuario->nome}}</h1>
                </div>
            </div>
            <div class="main-header-button">
                @if(session('erro'))
                    <button type="button" class="btn btn-secondary btn-lg" disabled >Manifestar interesse</button>
                @else
                    <button onclick="confirmarManifestacao()">Manifestar interesse</button>
                @endif
            </div>
        </div>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Cidade</h2>
            <p class="lh-base">{{$usuario->cidade}}</p>
        </div><br>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Experiência</h2>
            <p class="lh-base">{{$candidato->experiencia}}</p>
        </div><br>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Formação</h2>
            <p class="lh-base">{{$candidato->formacao}}</p>
        </div><br>
        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Descrição da Formação</h2>
            <p class="lh-base">{{$candidato->formacaoDescricao}}</p>
        </div><br>

        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Habilidades</h2>
                @foreach ($habilidadesCandidato as $habilidade)
                    <ul>{{$habilidade['nomeHabilidade']}}</ul>
                @endforeach
        </div><br>

        <div class="d-flex flex-column text-start">
            <h2 class="fs-2 fw-bold">Recursos de acessibilidade</h2>
            <table class="table table-hover">
            <thead>
                <tr class="table-info">
                    <th scope="col">Recurso de Acessibilidade</th>
                    <th scope="col">Necessita ou Não Necessita</th>
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

            <br><br>
                <div class="d-flex justify-content-between align-items-center">
                        <a href="{{route('empresa.selecionarVaga')}}" style="text-decoration: none; margin-right: 20px;">
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