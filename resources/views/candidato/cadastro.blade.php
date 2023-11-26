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
<br><br><br><br><br><br>
<x-header />
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
    <div class="title">Cadastro Candidato</div><br>
    <div class="content">
    <form action="{{ route('candidato.create') }}" method="post">
        @csrf
        <div class="user-details">
        <div class="input-box">
        <label for="nomeCandidato" class="details">Nome Completo: </label>
        <input type="text" id="nomeCandidato" name="nomeCandidato" value="{{ old('nomeCandidato') }}" placeholder="Digite seu Nome Completo" required>
        </div>

        <div class="input-box">
        <label for="cpfCandidato" class="details">CPF (Cadastro de Pessoa Física): (não utilize traços ou pontos)</label>
        <input type="text" id="cpfCandidato" name="cpfCandidato" value="{{ old('cpfCandidato') }}" placeholder="Digite seu CPF" required>
        </div>
        
        <div class="input-box">
        <label for="emailCandidato" class="details">E-mail: </label>
        <input type="email" id="emailCandidato" name="emailCandidato" value="{{ old('emailCandidato') }}" placeholder="Digite seu e-mail" required>
        </div>

        <div class="input-box">
        <label for="senhaCandidato" class="details">Senha: </label>
        <input type="password" id="senhaCandidato" name="senhaCandidato" placeholder="Digite sua senha" required>
        </div>

        <div class="input-box">
        <label for="confirmarSenhaCandidato" class="details">Confirmar senha: </label>
        <input type="password" id="confirmarSenhaCandidato" name="confirmarSenhaCandidato" placeholder="Confirme sua senha" required>
        </div>

        <div class="input-box">
        <label for="telefoneCandidato" class="details">Telefone: (não utilize traços ou pontos)</label>
        <input type="text" id="telefoneCandidato" name="telefoneCandidato" value="{{ old('telefoneCandidato') }}" placeholder="Digite seu telefone" required>
        </div>

        <div class="input-box">
        <label for="cidadeCandidato" class="details">Cidade que o candidato reside: </label>
        <select name="cidadeCandidato" value="{{ old('cidadeCandidato') }}">
            <option value="Alambari">Alambari-SP</option>
            <option value="Boituva">Boituva-SP</option>
            <option value="Capela do Alto">Capela do Alto-SP</option>
            <option value="Cerquilho">Cerquilho-SP</option>
            <option value="Cesário Lange">Cesário Lange-SP</option>
            <option value="Guareí">Guareí-SP</option>
            <option value="Itapetininga">Itapetininga-SP</option>
            <option value="Quadra">Quadra-SP</option>
            <option value="São Miguel Arcanjo">São Miguel Arcanjo-SP</option>
            <option value="Sarapuí">Sarapuí-SP</option>
            <option value="Tatuí">Tatuí-SP</option>
        </select>
        </div>

        <div class="input-box">
        <label for="experienciaCandidato" class="details">Experiência: </label>
        <input type="text" id="experienciaCandidato" name="experienciaCandidato" value="{{ old('experienciaCandidato') }}" placeholder="Digite sua experiência" required>
        </div>

        <div class="input-box">
        <label for="idiomasCandidato" class="details">Idiomas fluentes: </label>
        <input type="text" id="idiomasCandidato" name="idiomasCandidato" value="{{ old('idiomasCandidato') }}" placeholder="Digite os idiomas em que é fluente" required>
        </div>

        <div class="input-box">
        <label for="formacaoCandidato" class="details">Formação: </label>
        <input type="text" id="formacaoCandidato" name="formacaoCandidato" value="{{ old('formacaoCandidato') }}" placeholder="Digite sua Formação" required>
        </div>

        <div class="input-box">
        <label for="formacaoDescricaoCandidato" class="details">Descrição da formação: </label>
        <textarea name="formacaoDescricaoCandidato" id="formacaoDescricaoCandidato" value="{{ old('formacaoDescricaoCandidato') }}" placeholder="Descreva sua formação" required></textarea>
        </div>

        <h3>Recursos de acessibilidade que necessita:</h3>
          <input type="checkbox" name="recurso1" value="1">Interprete de libras<br>
          <input type="checkbox" name="recurso2" value="1">Banheiros acessiveis<br>
          <input type="checkbox" name="recurso3" value="1">Corredores acassiveis<br>
          <input type="checkbox" name="recurso4" value="1">Rampas<br>
          <input type="checkbox" name="recurso5" value="1">Elevadores<br>
          <input type="checkbox" name="recurso6" value="1">Conteúdo em braile<br>
          <input type="checkbox" name="recurso7" value="1">Espaço amplo para locomoção<br>

        <h3>Habilidades que você possui: </h3>
        <label class="details">Pode escolher quantas desejar</label><br><br>
        @foreach ($habilidades as $habilidade)
           <input type="checkbox" name="habilidade{{$habilidade['id']}}" value="{{$habilidade['id']}}">{{$habilidade['nomeHabilidade']}}<br>            
        @endforeach

        <button type="submit" class="button">Cadastrar</button>
        <br><br><br>
    </form><br><br><br><br>
</div>
</div>
</div>
<x-footer />