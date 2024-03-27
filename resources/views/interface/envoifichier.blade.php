<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('interface.header')
    <div class="main">
        <h1>Contactez-nous</h1>

        <!-- Cette section est ajouter avec form.envoifichier, mais la page est appeler avec une fonction dans les web path -->
        @section('formulaire')
        @show
    </div>
</body>
</html>