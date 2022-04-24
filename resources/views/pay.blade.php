<!DOCTYPE HTML>
<html lang="ru">

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/css/datepicker-foundation.min.css">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/js.js') }}"></script>
</head>

<body>
    @include('includes.header')
    <section class="home">
        <div class="container clearfix">
            @include('includes.balance')
            <h1 class="our_clients">Купить пакеты</h1>
            <div class="main_pay">
                <div class="top_text">Выберите пакеты для пользователя:
                    <p class="user_pay">{{ $user->login }}</p>
                    <a href="#" class="see_all">Посмотреть все купленные пакеты</a>
                </div>
                <div class="warning">Активация купленных пакетов в течении 10 мин!</div>

                <div class="all_pay_table">
                    <div class="top_pay_table">
                        <div class="item name_pay">
                            <p class="name_name">Название пакета</p>
                        </div>
                        <div class="item price_pay">
                            <p class="name_name">Цена в месяц (30 дней)</p>
                        </div>
                    </div>
                    @foreach ($packets as $packet)
                        <div class="content_pay_table">
                            <div class="item name_pay">
                                <input type="checkbox" class="check_it select_packets" data-id="{{ $packet->id }}" data-price="{{ $packet->price }}" />
                                <p class="name_info">{{ $packet->name }}</p>
                            </div>
                            <div class="item price_pay">
                                <p class="name_info">{{ $packet->price }}</p>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="pay_sel">
                    <p>Купить выбранные с</p>
                    <input type="text" id="start" onfocusout="startOutFocus(this)">
                    <p>по</p>
                    <input type="text" id="end" onfocusout="endOutFocus(this)">
                    </p>
                    <p>или купить на:</p>
                    <select class="select_data_for_month">
                        <option value="1">1 месяц</option>
                        <option value="2">2 месяця</option>
                        <option value="3">3 месяця</option>
                        <option value="4">4 месяця</option>
                        <option value="5">5 месяцев</option>
                        <option value="6">6 месяцев</option>
                        <option value="12">1 год</option>
                    </select>
                </div>
                <div class="warning data_select_packets">У вас пока нет выбранных пакетов...</div>
                {{-- <a href="#" class="btn_pay">Купить выбранный пакет</a> --}}
                <input type="button" class="btn_pay buy_packet_for_user" value="Купить выбранный пакет">
            </div>
        </div>
    </section>
    <footer>
        <div class="container clearfix">

        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.2.0/dist/js/locales/ru.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script>
        let balanceProfile = document.querySelector(".balance_profile span.sum");
        if (balanceProfile) {
            balanceProfile = balanceProfile.textContent;
        }
        const dateConverter = (date) => {
            let datearray = date.split(".");
            return datearray[1] + "." + datearray[0] + "." + datearray[2];
        };
        const start_data_packet = document.querySelector("input#start");
        const end_data_packet = document.querySelector("input#end");
        const dataSelectPackets = document.querySelector(
            ".main_pay .data_select_packets"
        );
        const selectPackets = document.querySelectorAll(
            ".main_pay .select_packets"
        );

        function startOutFocus(e) {
            let price = 0;
            selectPackets.forEach((packet, key, parent) => {
                if (packet.checked) {
                    price += parseFloat(packet.dataset.price);
                }
            });
            let start = Math.floor(
                Date.parse(dateConverter(start_data_packet.value)) / 1000
            );
            let end = Math.floor(
                Date.parse(dateConverter(end_data_packet.value)) / 1000
            );
            if (start > end || !start || !end) {
                dataSelectPackets.innerHTML = "Выберите правилную дату";
            }
            if (start > end || !start || !end) {
                dataSelectPackets.innerHTML = "Выберите правилную дату";
            } else {
                if (price > 0) {
                    let month = 2592000;
                    let diff = end - start;
                    let currentPrice = ((price * diff) / month).toFixed(2);
                    dataSelectPackets.innerHTML = `Общая стоимость: ${currentPrice} $ Ваш баланс: ${balanceProfile} $ | <a  href='/pay_balance'>Пополнить</a>`;
                } else {
                    dataSelectPackets.innerHTML =
                        "У вас пока нет выбранных пакетов...";
                }
            }
        }

        function endOutFocus(e) {
            let price = 0;
            selectPackets.forEach((packet, key, parent) => {
                if (packet.checked) {
                    price += parseFloat(packet.dataset.price);
                }
            });
            let start = Math.floor(
                Date.parse(dateConverter(start_data_packet.value)) / 1000
            );
            let end = Math.floor(
                Date.parse(dateConverter(end_data_packet.value)) / 1000
            );
            if (start > end || !start || !end) {
                dataSelectPackets.innerHTML = "Выберите правилную дату";
            }
            if (start > end || !start || !end) {
                dataSelectPackets.innerHTML = "Выберите правилную дату";
            } else {
                if (price > 0) {
                    let month = 2592000;
                    let diff = end - start;
                    let currentPrice = ((price * diff) / month).toFixed(2);
                    dataSelectPackets.innerHTML = `Общая стоимость: ${currentPrice} $ Ваш баланс: ${balanceProfile} $ | <a  href='/pay_balance'>Пополнить</a>`;
                } else {
                    dataSelectPackets.innerHTML =
                        "У вас пока нет выбранных пакетов...";
                }
            }
        }
    </script>
    <!----- УДАЛИТЬ СЛАЙДЕР ----->
</body>

</html>
