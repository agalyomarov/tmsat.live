<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no" />

    <title></title>

    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/framework.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css?3') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/js.js?4') }}"></script>
</head>

<body>
    @include('includes.header')
    <section class="home">
        <div class="container clearfix">
            @include('includes.balance')
            <h1 class="our_clients">Настройка Профиля</h1>
            <div class="main_profile">
                <div class="profile_edit_tools">
                    @if (isset($messages))
                        <ul>
                            @foreach ($messages as $message)
                                <li style="color:white;margin:10px 0;font-size:18px">{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <p class="title">Редактирование данных</p>
                    <form method="post" action="{{ route('user.update') }}">
                        @csrf
                        @method('put')
                        <label>
                            <span class="name_profile_edit">Пароль</span>
                            <input type="password" placeholder="Измените пароль" name="password" />
                        </label>
                        <label>
                            <span class="name_profile_edit">Номер телефона</span>
                            <input type="text" placeholder="Изменить номер телефона" name="icq" />
                        </label>
                        <input class="btn" type="submit" value="Изменить">
                    </form>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input class="btn" type="submit" value="Выйти">
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
