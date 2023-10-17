<h2>Selecione para qual vaga deseja buscar um candidato:</h2>
<form action="{{ route('empresa.showCandidatos') }}" method="POST">
    @csrf
    <select name="vaga">
        @foreach ($vagas as $vaga)
            <option value="{{ $vaga->id }}">{{$vaga->titulo}}</option>
        @endforeach
    </select>
    <button type="submit">Buscar</button>
</form>