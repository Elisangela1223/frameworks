<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Para funcionar o tailwindcss -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Formulario</title>
</head>
<body class="antialiased">
    <form action="/envio" method="post">
        @csrf

        <label for="inputNome">Nome:</label>
        <input type="text" id="inputNome" name="inputNome">

        <label for="inputEmail">E-mail</label>
        <input type="email" id="inputEmail" name="inputEmail">

        <button type="submit">Registrar</button>
    </form>
</body>
</html>