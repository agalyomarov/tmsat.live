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
    <script src="{{ asset('js/js.js') }}"></script>
</head>

<body>
    @include('includes.header')

    <section class="home">
        <div class="container clearfix">
            @include('includes.balance')
            <h1 class="our_clients">Пополнить баланс</h1>
            <div class="main_pay_balance">
                <div class="tab_pay">
                    <p class="pay_pay active">Пополнение</p>
                    <p class="transfer_pay">Передача средств</p>
                    <p class="history_pay">История пополнения</p>

                    <div class="pay_pay_item">
                        <p class="text">Это страница вашего баланса, здесь Вы можете его пополнить. Средства на баланс зачисляются в течении 20 минут!</p>
                        <div class="wallet">
                            <p class="title">WEBMONEY:</p>
                            <p class="code">z449516764716</p>
                            <p class="info">
                                Внимание! Минимальное пополнение 5 wmz.
                            </p>
                            <ul>
                                <li>
                                    <span>1. Примечание к платежу:</span>
                                    <input type="text" placeholder="login: adminroman" />
                                </li>
                                <li>
                                    <span>2. Отправьте средства на:</span>
                                    <input type="text" placeholder="login: adminroman" />
                                </li>
                                <li>
                                    <span>3. Напишите администратору о вашем платеже</span>
                                </li>
                            </ul>
                        </div>
                        <div class="wallet">
                            <p class="title">Яндекс QIWI</p>
                            <p class="code">3454354355234</p>
                            <ul>
                                <li>
                                    <span>1. Примечание к платежу:</span>
                                    <input type="text" placeholder="login: adminroman" />
                                </li>
                                <li>
                                    <span>2. Отправьте средства на:</span>
                                    <input type="text" placeholder="login: adminroman" />
                                </li>
                                <li>
                                    <span>3. Напишите администратору о вашем платеже</span>
                                </li>
                            </ul>
                        </div>
                        <div class="wallet">
                            <p class="title">TMSELL</p>
                            <p class="info">
                                После отправки средств напишите администратору!
                                Если оплату производите через терминал, то сообщите о вашем платеже администратору
                            </p>
                            <div class="all_tmsel">
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                                <p>23343243244</p>
                            </div>
                        </div>

                        <p class="my_balance"> $0.00</p>
                    </div>

                    <div class="transfer_pay_item hide">
                        <form>
                            <label>
                                <span class="name_name">Отправить $</span>
                                <input type="text" placeholder="Введите сумму" />
                            </label>
                            <label>
                                <span class="name_name">Получатель</span>
                                <input type="text" placeholder="Имя получателя" />
                            </label>
                            <a href="#" class="btn">Отправить</a>
                        </form>
                    </div>

                    <div class="history_pay_item hide">
                        <div class="top_it">
                            <div class="item date">
                                <p class="name_name">Дата и время</p>
                            </div>
                            <div class="item motion">
                                <p class="name_name">Движение</p>
                            </div>
                            <div class="item price">
                                <p class="name_name">Сумма</p>
                            </div>
                            <div class="item operation">
                                <p class="name_name">Операция</p>
                            </div>
                        </div>
                        <div class="item_history">
                            <div class="item date">
                                <p class="name_info">31.01.21, 17:30</p>
                            </div>
                            <div class="item motion">
                                <p class="name_info">+</p>
                            </div>
                            <div class="item price">
                                <p class="name_info">0.00$</p>
                            </div>
                            <div class="item operation">
                                <p class="name_info">Остановка пакета, возврат остатка.</p>
                            </div>
                        </div>
                        <div class="item_history">
                            <div class="item date">
                                <p class="name_info">13.04.21, 20:00</p>
                            </div>
                            <div class="item motion">
                                <p class="name_info">+</p>
                            </div>
                            <div class="item price">
                                <p class="name_info">10.00$</p>
                            </div>
                            <div class="item operation">
                                <p class="name_info">Пополнение</p>
                            </div>
                        </div>
                    </div>

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
