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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>

<body>
    @include('includes.header')
    <section class="home">
        <div class="container clearfix">
            @include('includes.balance')
            <h1 class="our_clients">Наши клиенты</h1>
            <form class="search_user">
                <a href="create_cliente.html" class="add_btn">Добавить клиента</a>
                <input type="text" placeholder="Введите имя пользователя" />
                <a href="#" class="search">Поиск</a>
            </form>
            <div class="main_all_user">
                <div class="active_user">149</div>
                <div class="num_single">
                    <select>
                        <option>10</option>
                        <option>100</option>
                        <option>1000</option>
                    </select>
                </div>
                <div class="all_user">
                    <div class="top_cap">
                        <div class="item check_item">
                            <input type="checkbox" class="check_it" />
                        </div>
                        <div class="item login_item">
                            <p class="name_name">Логин</p>
                        </div>
                        <div class="item pass_item">
                            <p class="name_name">Пароль</p>
                        </div>
                        <div class="item server_item">
                            <p class="name_name">Сервер</p>
                        </div>
                        <div class="item notific_item">
                            <p class="name_name">Заметка</p>
                        </div>
                        <div class="item day_item">
                            <p class="name_name">Действует до</p>
                        </div>
                        <div class="item packet_item">
                            <p class="name_name">Пакет</p>
                        </div>
                        <div class="item btn_item">
                            <p class="name_name">Действия</p>
                        </div>
                    </div>
                    {{-- <div class="item_user ended">
                        <div class="item check_item">
                            <input type="checkbox" class="check_it" />
                        </div>
                        <div class="item login_item">
                            <p class="name_info">Vlad_1997</p>
                        </div>
                        <div class="item pass_item">
                            <p class="name_info">Qwerty123</p>
                        </div>
                        <div class="item server_item">
                            <p class="name_info">1</p>
                        </div>
                        <div class="item notific_item">
                            <p class="name_info">sdfdsf d sf</p>
                        </div>
                        <div class="item day_item">
                            <p class="name_info">10.02.22</p>
                        </div>
                        <div class="item packet_item">
                            <p class="name_info">Телекарта 85е</p>
                        </div>
                        <div class="item btn_item">
                            <div class="list_btn">Действия</div>
                            <div class="all_action">
                                <a href="#">Изменить</a>
                                <a href="#">Удалить</a>
                                <a href="pay.html">Купить</a>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($users as $user)
                        <div class="item_user">
                            <div class="item check_item">
                                <input type="checkbox" class="check_it" />
                            </div>
                            <div class="item login_item">
                                <p class="name_info">{{ $user->login }}</p>
                            </div>
                            <div class="item pass_item">
                                <p class="name_info">{{ $user->password }}</p>
                            </div>
                            <div class="item server_item">
                                <p class="name_info">{{ $user->server_n }}</p>
                            </div>
                            <div class="item notific_item">
                                <p class="name_info">{{ $user->notice }}</p>
                            </div>
                            <div class="item day_item">
                                @if (isset($user->user_packet->time_till))
                                    <p class="name_info">
                                        {{ $user->user_packet->time_till }}
                                    </p>
                                @endif
                            </div>
                            <div class="item packet_item">
                                @if (isset($user->user_packet->packet_group))
                                    <p class="name_info">{{ $user->user_packet->packet_group }}</p>
                                @endif
                            </div>
                            <div class="item btn_item">
                                <div class="list_btn">Действия</div>
                                <div class="all_action">
                                    <p class="diller_edit_user" data-login="{{ $user->login }}">Изменить</p>
                                    <p>Удалить</p>
                                    <a href="{{ route('diller.user.packet', $user->login) }}">Купить</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- <div class="item_user active">
                        <div class="item check_item">
                            <input type="checkbox" class="check_it" />
                        </div>
                        <div class="item login_item">
                            <p class="name_info">Vlad_1997</p>
                        </div>
                        <div class="item pass_item">
                            <p class="name_info">Qwerty123</p>
                        </div>
                        <div class="item server_item">
                            <p class="name_info">1</p>
                        </div>
                        <div class="item notific_item">
                            <p class="name_info">sdfdsf d sf</p>
                        </div>
                        <div class="item day_item">
                            <p class="name_info">04.03.22</p>
                        </div>
                        <div class="item packet_item">
                            <p class="name_info">Телекарта 85е</p>
                        </div>
                        <div class="item btn_item">
                            <div class="list_btn">Действия</div>
                            <div class="all_action">
                                <a href="#">Изменить</a>
                                <a href="#">Удалить</a>
                                <a href="pay.html">Купить</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="item_user">
                        <div class="item check_item">
                            <input type="checkbox" class="check_it" />
                        </div>
                        <div class="item login_item">
                            <p class="name_info">Vlad_1997</p>
                        </div>
                        <div class="item pass_item">
                            <p class="name_info">Qwerty123</p>
                        </div>
                        <div class="item server_item">
                            <p class="name_info">1</p>
                        </div>
                        <div class="item notific_item">
                            <p class="name_info">sdfdsf d sf</p>
                        </div>
                        <div class="item day_item">
                            <p class="name_info">04.01.22</p>
                        </div>
                        <div class="item packet_item">
                            <p class="name_info">Телекарта 85е</p>
                        </div>
                        <div class="item btn_item">
                            <div class="list_btn">Действия</div>
                            <div class="all_action">
                                <a href="#">Изменить</a>
                                <a href="#">Удалить</a>
                                <a href="pay.html">Купить</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
                <div class="notted_single">
                    <select>
                        <option>Купить пакеты</option>
                        <option>Сервер переполнен</option>
                        <option>Ваш текст</option>
                    </select>
                    <a href="#" class="install">Применить</a>
                </div>
                <div class="notted_single">
                    <select>
                        <option>Продлить на 1 месяц</option>
                        <option>Продлить на 2 месяца</option>
                        <option>Продлить на 3 месяца</option>
                        <option>Продлить на 4 месяца</option>
                        <option>Продлить на 5 месяцев</option>
                        <option>Продлить на 6 месяцев</option>
                        <option>Продлить на 1 год</option>
                    </select>
                    <a href="#" class="install">Применить</a>
                </div>
            </div>
        </div>
    </section>

    <div class="profile_edit">
        <span class="cansel"></span>
        <p class="title">Введите данные</p>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:white;margin:10px 0">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('diller.addUser') }}" method="post">
            @csrf
            <label>
                <span class="name_profile_edit">Логин</span>
                <input type="text" placeholder="Введите логин" name="login" />
            </label>
            <label>
                <span class=" name_profile_edit">Пароль</span>
                <input type="password" placeholder="Введите пароль" name="password" />
            </label>
            <label>
                <span class="name_profile_edit">Сервер</span>
                <select name="server_n">
                    <option value="1" selected="">1# Таджикистан s1.tmsat.live </option>
                    <option value="2">2# Узбекистан s2.tmsat.live </option>
                    <option value="3">3# Таджикистан s3.tmsat.live </option>
                    <option value="4">4# Туркменистан tm2.tmsat.live </option>
                    <option value="5">5# Туркменистан tm3.tmsat.live </option>
                    <option value="6">6# Туркменистан tm4.tmsat.live </option>
                    <option value="7">7# Туркменистан tm5.tmsat.live </option>
                    <option value="8">8# Туркменистан tm6.tmsat.live </option>
                    <option value="9">9# Туркменистан tm7.tmsat.live </option>
                    <option value="10">10# Туркменистан tm8.tmsat.live </option>
                    <option value="11">11# Туркменистан tm9.tmsat.live </option>
                    <option value="12">12# Туркменистан tm10.tmsat.live </option>
                    <option value="13">13# Туркменистан tm11.tmsat.live </option>
                    <option value="14">14# Туркменистан tm12.tmsat.live </option>
                    <option value="15">15# Туркменистан tm13.tmsat.live </option>
                    <option value="16">16# Туркменистан tm14.tmsat.live </option>
                    <option value="17">17# Туркменистан tm15.tmsat.live </option>
                    <option value="18">18# Туркменистан tm16.tmsat.live </option>
                    <option value="19">19# Туркменистан tm17.tmsat.live </option>
                </select>
            </label>
            <label>
                <span class="name_profile_edit">Заметки</span>
                <textarea name="notice"></textarea>
            </label>
            <input class="btn" type="submit" value="Создать" name="btn">
        </form>
    </div>
    <div class="black_fon"></div>
    <footer>
        <div class="container clearfix">
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
    <!----- УДАЛИТЬ СЛАЙДЕР ----->
</body>

</html>
