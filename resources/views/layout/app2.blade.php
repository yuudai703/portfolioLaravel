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

   
    </head>
    {{-- <body class="background-container" style="overflow-x: hidden !important;"> --}}
    <body style="background-color:#DAD7CF;">



        
        {{-- #DAD7CF → 全体背景
        #186A70 → メニュー・見出し
        #3B8B8E → hover・補助
        #BEB7A5 → コンテンツカード
        #BE8871 → アクティブ状態・アクセント   --}}


    <div class="h-screen mx-auto max-w-screen-lg px-4 sm:px-10 lg:px-14"> 
        @yield('content')
    </div>

        <script>
        </script>
    </body>
</html>