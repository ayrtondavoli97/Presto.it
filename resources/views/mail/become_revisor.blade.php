<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>un utente ha chiesto di lavorare come revisore</h1>
    <h2>ecco is suoi dati</h2>
    <p>Nome {{$user->name}}</p>
    <p>Nome {{$user->email}}</p>
    <p>se vuoi accettare la richiesta clicca qui</p>
    <a href="{{route('make.revisor',compact('user'))}}">rendi revisore</a>
    

</body>
</html>