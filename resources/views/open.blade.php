<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no" />

    <title></title>

    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
</head>

<body>
    @include('includes.header')
    <section class="home">
        <div class="container clearfix">
            @include('includes.balance')
            <div class="form_enter">

                <div class="tab_enter">
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color:white;margin:10px 0">{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <span class="enter active">Вход</span>
                    <span class="reg">Регистрация</span>
                    <form class="enter_enter" method="post" action="{{ route('login') }}">
                        @csrf
                        <input type="text" placeholder="Имя/Логин" name="login">
                        <input type="password" placeholder="Пароль" name="password">
                        <input type="submit" class="btn" value="Войти">
                    </form>
                    <form class="reg_reg hide" action="{{ route('register') }}" method="post">
                        @csrf
                        <input type="text" placeholder="Имя/Логин*" name="login">
                        <input type="email" placeholder="Email*" name="email">
                        <input type="text" placeholder="Номер телефона*" name="telefon">
                        <input type="password" placeholder="Пароль*" name="password">
                        <input type="submit" class="btn" value="Зарегестрироваться">
                    </form>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container clearfix">

        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <!----- УДАЛИТЬ СЛАЙДЕР ----->
</body>

</html>
