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
            <h1 class="our_clients">Настройки</h1>
            <div class="main_tools">
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_name">Пакет</p>
                    </div>
                    <div class="item port">
                        <p class="name_name">Порт</p>
                    </div>
                    <div class="item ident">
                        <p class="name_name">Идент</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">NTV+Vostok 56E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">700</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0500:050C00</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">Telekarta 85E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">701</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0B00:00000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">Setanta Sport 31.5E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">706</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0500:041200</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">NC+13E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">703</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0100:000068</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">DSmart 42E (Тест)</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">705</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">092B:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">NTV+36E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">901</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0500:060A00</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">Canal+Sport 13E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">708</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">1884:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">Cyfrowy Polsat 13E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">702</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">1803:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">GeoTelecom 75E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">721</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0618:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">GeoTelecom 75E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">722</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0628:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">GeoTelecom 75E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">723</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0634:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">GeoTelecom 75E</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">724</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">0662:000000</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">cccam</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">801</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">Все иденты</p>
                    </div>
                </div>
                <div class="item_item">
                    <div class="item packet">
                        <p class="name_info server">cs378x</p>
                    </div>
                    <div class="item port">
                        <p class="name_info">802</p>
                    </div>
                    <div class="item ident">
                        <p class="name_info">Все иденты</p>
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
