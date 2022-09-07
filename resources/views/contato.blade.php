@extends('layouts.site')

@section('conteudo')
    <h1>Fale conosco, somente se precisar</h1>

    <form>
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">
        </div>

        <div>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem" id="mensagem" cols="30" rows="10"></textarea>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </form>
@endsection
