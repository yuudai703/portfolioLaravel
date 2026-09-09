<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>arai.yuudai　ポートフォリオ</title>
        <meta name="description" content="長野県在住エンジニア、新井勇大のポートフォリオサイトです。">
        <meta name=”keywords” content="新井勇大,エンジニア,ポートフォリオ"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />


        <script src="https://cdn.tailwindcss.com"></script>
        <script src="{{ asset('js/anime.min.js')}}"></script>
        

    <meta name="google" content="notranslate">


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2RX7HQ6G0Q"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{ asset('animation/animate.css') }}">
    <script src="{{ asset('animation/jquery.textillate.js') }}"></script>
    <script src="{{ asset('animation/jquery.lettering.js') }}"></script>

    <style>

        .openAni {
            opacity: 0;
            animation: bounceIn 0.5s both;
        }

        @keyframes bounceIn {
            0% {
        opacity: 0;
        transform: scale(0.3);
    }

    20% {
        opacity: 1;
        transform: scale(1.03);
    }

    40% {
        transform: scale(0.97);
    }

    60% {
        transform: scale(1.03);
    }

    80% {
        transform: scale(0.97);
    }

    100% {
        opacity: 1;
        transform: scale(1);
    }
        }
      
    </style>

   
    </head>
    {{-- <body class="background-container" style="overflow-x: hidden !important;"> --}}
    <body style="background-color:#DAD7CF; width:100%;">
        {{-- <div id="postMesParent" style="position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); z-index: 99; text-align: center;">
        </div> --}}



        
        {{-- #DAD7CF → 全体背景
        #186A70 → メニュー・見出し
        #3B8B8E → hover・補助
        #BEB7A5 → コンテンツカード
        #BE8871 → アクティブ状態・アクセント   --}}

    <div class="Gradation_5 h-screen mx-auto max-w-screen-lg px-4 sm:px-10 lg:px-14"> 
        @yield('content')
    </div>


    {{-- https://textillate.js.org/ --}}
        <script>
            var tlt = $('.openAni');
            tlt.textillate({
                autoStart: false,
                in: {
                    effect: 'bounceIn',
                    sync: true,
            }});
            tlt.textillate('start');

            var tlt2 = $('.openAni2');
            tlt2.textillate({
            autoStart: false,
            in: {
                effect: 'bounceIn',
                sync: true,
            }});
            tlt2.textillate('start');
            function openAni2(){
                // tlt2.textillate('start');
            }

            var tlt3 = $('.openAni3');
            tlt3.textillate({
            autoStart: false,
            in: {
                effect: 'bounceIn',
                sync: true,
            }});
            function openAni3(){
                tlt3.textillate('start');
            }

            var tlt4 = $('.openAni4');
            tlt4.textillate({
            autoStart: false,
            in: {
                effect: 'bounceIn',
                sync: true,
            }});
            tlt4.textillate('start');
            function openAni4(){
                tlt4.textillate('start');
            }
        </script>
    </body>
</html>