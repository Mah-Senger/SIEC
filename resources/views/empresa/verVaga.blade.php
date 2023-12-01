<!DOCTYPE html>
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
    <section class="w-75 m-auto pt-5">
        <div class="d-flex justify-content-between align-items-center mt-5 pt-5 mb-5">
            <div class="d-flex justify-content-between align-items-center w-25">
                <img src="{{ asset('images/pessoas.png') }}" class="w-25">
                <h1 class="fs-1">{{$vaga->titulo}}</h1>
            </div>
            <div class="alinharEditarExcluir" style="display: flex;">
                      <a href="{{route('empresa.editarVaga', $vaga['id'])}}" style="text-decoration: none;">
                          <div style="background-color: green; padding: 10px; border: none; border-radius: 10px; color: black;" class="EditarExcluir">
                            <i class='bx bxs-edit'></i>
                            <span>Editar</span>
                          </div>
                        </a><br>
                        <a href="{{route('empresa.deleteVaga', $vaga['id'])}}" style="text-decoration: none; margin-left: 20px">
                          <div style="background-color: red; padding: 10px; border: none; border-radius: 10px; color: black;" class="EditarExcluir">
                            <i class='bx bxs-message-square-x'></i>
                            <span>Excluir</span>
                          </div>
                        </a>
            </div>
        </div>
    
        <div class="d-flex flex-column text-start">
            <h1 class="fw-bold">Informações da vaga</h1>
        </div><br><br>
        <div class="d-flex flex-column text-start">
            <h4 class="fs-2 fw-bold">Empresa Responsável: {{$empresa->nome}}</h4>
        </div><br>
        <div class="d-flex flex-column text-start">
            <h4 class="fs-2 fw-bold">Requisitos e habilidades</h4>
                @foreach ($habilidadesVaga as $habilidade)
                    <ul>{{$habilidade['nomeHabilidade']}}</ul>
                @endforeach
        </div>
        <div class="d-flex flex-column text-start">
            <h4 class="fs-2 fw-bold">Descrição da Vaga</h4>
            <p class="lh-base">{{$vaga->descricao}}</p>
        </div>
        <div class="d-flex flex-column text-start">
            <h4 class="fs-2 fw-bold">Salário</h4>
            <p class="lh-base">O salário está proposto como R$ {{$vaga->salario}},00, num intervalo de {{$vaga->periodoPagamento}} dias.</p>
        </div>
        <div class="d-flex flex-column text-start">
            <h4 class="fs-2 fw-bold">Carga horária</h4>
            <p class="lh-base">A contratante necessita de {{$vaga->cargaHoraria}} horas de trabalho semanais.</p>
        </div>
        <div class="d-flex flex-column text-start">
            <h4 class="fs-2 fw-bold">Tempo de Contrato</h4>
            <p class="lh-base">O contrato terá duração de {{$vaga->tempoContrato}} meses.</p>
        </div>

        <div class="d-flex justify-content-between align-items-center">
                        <a href="{{route('empresa.verVagasCadastradas')}}" style="text-decoration: none; margin-right: 20px;">
                          <div style="background-color: #265894; padding: 10px; border: none; border-radius: 10px; color: white;" class="EditarExcluir">
                            <span>Voltar</span>
                          </div>
                        </a><br><br><br><br>
                </div><br><br><br><br>
    </section>
    
    <x-footer />
</body>
</html>