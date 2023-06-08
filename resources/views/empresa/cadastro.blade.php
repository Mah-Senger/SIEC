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

    <form action="{{ route('empresa.create') }}" method="post">
        @csrf
        <label for="nomeEmpresa">Nome da empresa: </label>
        <input type="text" id="nomeEmpresa" class="" name="nomeEmpresa" value="{{ old('nomeEmpresa') }}"><br>

        <label for="cnpjEmpresa">CNPJ (Cadastro Nacional de Pessoa Jurídica): </label>
        <input type="text" id="cnpjEmpresa" class="" name="cnpjEmpresa" value="{{ old('cnpjEmpresa') }}"><br>
        
        <label for="emailEmpresa">Email: </label>
        <input type="email" id="emailEmpresa" class="" name="emailEmpresa" value="{{ old('emailEmpresa') }}"><br>

        <label for="senhaEmpresa">Senha: </label>
        <input type="password" id="senhaEmpresa" class="" name="senhaEmpresa"><br>

        <label for="confirmarSenhaEmpresa">Confirmar senha: </label>
        <input type="password" id="confirmarSenhaEmpresa" class="" name="confirmarSenhaEmpresa"><br>

        <label for="telefoneEmpresa">Telefone: </label>
        <input type="text" id="telefoneEmpresa" class="" name="telefoneEmpresa" value="{{ old('telefoneEmpresa') }}"><br>

        <label for="cidadeEmpresa">Cidade que a empresa se localiza: </label>
        <select name="cidadeEmpresa" value="{{ old('cidadeEmpresa') }}">
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
        </select><br>

        <label for="ruaEndEmpresa">Rua: </label>
        <input type="text" id="ruaEndEmpresa" class="" name="ruaEndEmpresa" value="{{ old('ruaEndEmpresa') }}"><br>

        <label for="numEndEmpresa">Número: </label>
        <input type="number" id="numEndEmpresa" class="" name="numEndEmpresa" value="{{ old('numEndEmpresa') }}"><br>

        <label for="bairroEndEmpresa">Bairro: </label>
        <input type="text" id="bairroEndEmpresa" class="" name="bairroEndEmpresa" value="{{ old('bairroEndEmpresa') }}"><br>

        <label for="cepEndEmpresa">CEP: </label>
        <input type="text" id="cepEndEmpresa" class="" name="cepEndEmpresa" value="{{ old('cepEndEmpresa') }}"><br>

        <label for="objHistEmpresa">Objetivos e história da empresa: </label>
        <textarea name="objHistEmpresa" id="objHistEmpresa" value="{{ old('objHistEmpresa') }}"></textarea><br>

        <button type="submit">Cadastrar</button>
    </form><br>
<x-footer />