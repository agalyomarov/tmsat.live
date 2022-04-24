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
            <h1 class="our_clients">Новости</h1>
            <div class="main_news">
                @foreach ($news as $post)
                    @if ($post->is_sale)
                        <div class="item sale">
                            <p class="date">{{ $post->sale_title }} От {{ Carbon\Carbon::parse($post->start_publish)->translatedFormat('d F Y') }} до {{ Carbon\Carbon::parse($post->end_publish)->translatedFormat('d F Y') }}</p>
                            <p class="text">{!! $post->body !!}</p>
                        </div>
                    @else
                        <div class="item">
                            <p class="date">{{ Carbon\Carbon::parse($post->start_publish)->translatedFormat('d F Y') }}</p>
                            <p class="text">
                                {!! $post->body !!}
                            </p>
                        </div>
                    @endif
                @endforeach

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
