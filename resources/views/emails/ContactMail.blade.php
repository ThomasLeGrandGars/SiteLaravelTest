<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <strong>Message envoyer par {{$details['name']}} depuis votre site web Laravel</strong>
    <p>Message : {{$details['msg']}}</p>
    <p>Email : {{$details['email']}}</p>
    <p>Fichier : {{$details['file']}}</p>
</body>
</html>