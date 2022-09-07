<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Biqueira - Queda D'agua</title>

        <style>
            .container {
                width: 100%;
                height: 100%;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .container img {
                width: 100%;
                height: auto;
            }

            .container h1 {
                font-size: 2em;
                text-align: center;
            }

            .container p {
                font-size: 1.5em;
                text-align: center;
            }

            .container a {
                font-size: 1.5em;
                text-align: center;
                text-decoration: none;
            }

            .container a:hover {
                text-decoration: underline;
            }

            nav {
                width: 100%;
                height: auto;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                background-color: #000;
            }

            nav a {
                font-size: 1.5em;
                color: #fff;
                text-decoration: none;
            }

            nav a:hover {
                text-decoration: underline;
            }

            footer {
                width: 100%;
                height: auto;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
                background-color: #000;
            }

            footer p {
                font-size: 1.5em;
                color: #fff;
                text-decoration: none;
            }

            footer a:hover {
                text-decoration: underline;
            }

            form {
                width: 100%;
                height: auto;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            form div {
                width: 100%;
                height: auto;
                display: flex;
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
            }

            form div label {
                font-size: 1.5em;
                color: #000;
            }

            form div input {
                font-size: 1.5em;
                color: #000;
            }

            form div textarea {
                font-size: 1.5em;
                color: #000;
            }

            form div button {
                font-size: 1.5em;
                color: #000;
            }
        </style>
    </head>
    <body>
        <nav>
            <a href="{{ route('site.index') }}">Início</a>
            <a href="{{ route('site.sobre') }}">Sobre a Biqueira</a>
            <a href="{{ route('site.contato') }}">Contato</a>
        </nav>

        <main class="container">
            @yield('conteudo')
        </main>

        <footer>
            <p>Todos os direitos reservados</p>
        </footer>
    </body>
</html>
