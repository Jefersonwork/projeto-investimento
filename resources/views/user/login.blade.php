<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Investindo</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css')}}"></link>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One"></link>
</head>
<body>
    <div class="backgrounder"></div>

    <section id="conteudo-view" class="login">
        
        <h1>Investindo</h1>
        <h3>O nosso gerenciador de investimentos</h3>

        {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}
        
        <p>Acesse o sistema</p>

        <label>
            {!! Form::text('username', null, ['class' => 'input', 'placeholder' => "Usuário"]) !!}
        </label>

        <label>
            {!! Form::password('userpass', ['class' => 'input', 'placeholder' => "Senha"]) !!}
        </label>

        {!! Form::submit('Entrar', ['class' => 'submit']) !!}

        {!! Form::close() !!}

    </section>
</body>
</html>