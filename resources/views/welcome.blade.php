<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Сайт студии интерьерного дизайна Екатерины Поздняковой">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Екатерина Позднякова - Архитектура &amp; Дизайн">
    <meta property="og:description" content="Сайт студии интерьерного дизайна Екатерины Поздняковой">
    <meta property="og:image" content="{{ asset('img/og.jpg') }}">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:site_name" content="Екатерина Позднякова">
    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/svg+xml" href="{{ asset('img/favicons/fav.svg') }}">
    <title>Екатерина Позднякова - Архитектура &amp; Дизайн</title>
    @fonts
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="stub">
        <p class="stub__title">Архитектура <span>&amp;</span> Дизайн</p>

        <p class="stub__subtitle">пространство начинается с понимания</p>

        <div class="stub__image">
            <img src="{{ asset('img/center.webp') }}" alt="" width="500" height="500">
        </div>

        <p class="stub__update">сейчас мы обновляемся для вас</p>

        <div class="stub__contacts">
            <a href="https://t.me/ek_vi_po" aria-label="Telegram">
                <img src="{{ asset('img/telegram.svg') }}" alt="" width="20" height="20">
            </a>
            <a href="https://max.ru/" aria-label="Max">
                <img src="{{ asset('img/max.svg') }}" alt="" width="20" height="20">
            </a>
            <a href="tel:+79191309006">+7 919 130 90 06</a>
        </div>
    </div>
</body>

</html>
