<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            section.main {
            background-color: aliceblue;
            width: 100%;
            margin: 0 auto;
            padding: 0 30px;
            height: 100vh;
        }

        .header-area {
            display: flex;
        }

        .main-area {
            display: flex;
        }
        .logo {
        flex-basis: 15%;
        height: 75px;
        background: wheat;
        padding: 25px;
        }

        .header {
            flex-basis: 80%;
            background: bisque;
            height: 75px;
            padding: 25px;
        }
        .sidebar {
    flex-basis: 15%;
    background: aquamarine;
    height: 100vh;
}

.nav li {
    padding: 10px 15px;
    background: skyblue;
    border-bottom: 1px solid #999;
}

.content {
    flex-basis: 85%;
    background: darkkhaki;
}

.user {
    flex-basis: 5%;
    height: 75px;
    background: wheat;
    padding: 25px;
}
        </style>
    </head>
    <body>
        <section class="main">
            <div class="header-area">
                <div class="logo">logo here</div>
                <div class="header">Header content here</div>
                <div class="user">
                    user img
                </div>
            </div>
            <div class="main-area">
                <div class="sidebar">
                    <div class="nav">
                        <ul>
                            <li><a href="">Link1</a></li>
                            <li><a href="">Link2</a></li>
                            <li><a href="">Link3</a></li>
                            <li><a href="">Link4</a></li>
                            <li><a href="">Link5</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content">main content area</div>
            </div>
        </section>
    </body>
</html>
