<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>INICIO</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/pagina4.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=PT+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<x-header />
<br><br><br><br><br><br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

  <div class="container">
    <div class="title">Cadastro Vaga</div><br>
    <div class="content">
      <form action="{{ route('empresa.createVaga') }}" method="post">
      @csrf
        <input type="hidden" name="idUsuario" value="{{$_SESSION['usuario']['id']}}">
       <div class="user-details">
          <div class="input-box">
            <span for="tituloVaga" class="details">Título da vaga: </span>
            <input type="text" id="tituloVaga" class="" name="tituloVaga" value="{{ old('tituloVaga') }}" placeholder="Digite o título da vaga" required>
          </div>

          <div class="input-box">
          <span class="details" for="descricaoVaga">Descrição da vaga: </span>
          <textarea name="descricaoVaga" id="descricaoVaga" value="{{ old('descricaoVaga') }}" placeholder="Digite a descrição da vaga" required></textarea>
          </div>

          <div class="input-box">
            <span for="salarioVaga" class="details">Salário mensal: (digite apenas números)</span>
            <input type="text" id="salarioVaga" class="" name="salarioVaga" value="{{ old('salarioVaga') }}" placeholder="Ex: 2500" required>
           </div>

          <div class="input-box">
            <span for="cargaHorariaVaga" class="details">Carga horária (semanal): (digite apenas números)</span>
            <input type="number" id="cargaHorariaVaga" name="cargaHorariaVaga" value="{{ old('cargaHorariaVaga') }}" placeholder="Ex: 30" required>
          </div>

          <div class="input-box">
            <span for="tempoContratoVaga" class="details">Tempo de contrato (em meses):</span>
            <input type="number" id="tempoContratoVaga" name="tempoContratoVaga" placeholder="Ex: 12" value="{{ old('tempoContratoVaga') }}" required>
          </div>

          <div class="input-box">
            <span for="periodoPagamentoVaga" class="details">Período de pagamento (em dias): (apenas números)</span>
            <input type="number" id="periodoPagamentoVaga" name="periodoPagamentoVaga" placeholder="Ex: 30" value="{{ old('periodoPagamentoVaga') }}" required>
          </div>

          <h3>Habilidades requeridas na vaga: </h3>
          <label class="details">Pode escolher quantas desejar</label><br><br>
          @foreach ($habilidades as $habilidade)
           <input type="checkbox" name="habilidade{{$habilidade['id']}}" value="{{$habilidade['id']}}">{{$habilidade['nomeHabilidade']}}<br>            
          @endforeach

          <button class="button" type="submit">Cadastrar</button>
          <br><br><br>
        </form><br><br><br>

        
    </div>
  </div>
  </div>
</body>
<x-footer />
