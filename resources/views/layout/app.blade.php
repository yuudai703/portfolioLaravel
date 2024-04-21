<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>MessageBoard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.24.0/dist/full.css" rel="stylesheet" type="text/css" />


        <script src="https://cdn.tailwindcss.com"></script>

    <meta name="google" content="notranslate">
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/styles/monokai.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.1/highlight.min.js"></script>
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body class="background-container">
          <div id="postMesParent" style="position: fixed; top: 20%; left: 50%; transform: translate(-50%, -50%); z-index: 99; text-align: center;">
          </div>
          <!-- メイン画面表示 -->
        @yield('content')
        <script type="module" src="/main.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/6.3.1/d3.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/d3pie@0.2.1/d3pie/d3pie.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

    if(window.location.href.indexOf('blog/show')==-1 &&
    window.location.href.indexOf('blog/create')==-1){

    let peiSize;
    if(screen.width>499){
      peiSize=600;
    }else{
      peiSize=400;
    }

      var pie = new d3pie("myChart", {
            "size": {
                "canvasWidth": peiSize,
                "canvasHeight": peiSize
            },
            "header": {
              "title": {
                "text": "Language",
                "fontSize": 24, // タイトルのフォントサイズを24に設定
                "font": "Meiryo UI"
              },
            },
            "labels": {
              "outer": {
                "format": "label",
                "fontSize": 30, // 外側のラベルのフォントサイズを18に設定
              },
              "inner": {
                "format": "percentage",
                "fontSize": 16, // 内側のラベル（パーセンテージ）のフォントサイズを16に設定
              }
            },
            "data": {
              "content": [
                { label: "PHP", value: 50 },
                { label: "JavaScript", value: 30 },
                { label: "HTML", value: 10 },
                { label: "CSS", value: 10 }
              ],
            },
            });
      }





//どの画面を表示するのか
// window.onload = function() {
//       const currentUrl = window.location.href;
//       //メイン画表示
//       if(currentUrl.indexOf('blog/show')==-1){
//         document.querySelector('#blog-show').innerHTML='';
//         document.querySelector('#welcome-contents').style='';

//         //ブログ表示
//       }else{
//         document.querySelector('#blog-show').style='';
//         document.querySelector('#welcome-contents').innerHTML='';
//       }

        function selectMenu(v){
          document.getElementById('overlay-button').checked = true;
          console.log(document.getElementById('overlay-button').checked);
          const showElement = document.querySelector("#"+v);
          showElement.scrollIntoView({
              behavior: 'smooth', // スムーズにスクロールする場合
              block: 'center',
          });

        }

        function selectMenu2(v){
          document.getElementById('overlay-button').click();
          console.log(document.getElementById('overlay-button').checked);
          const showElement = document.querySelector("#"+v);
          showElement.scrollIntoView({
              behavior: 'auto', // スムーズにスクロールする場合
              block: 'center',
          });

        }








    function contactSubmit(){
      const name = document.querySelector("#name").value;
      const address = document.querySelector("#email").value;
      const message = document.querySelector("#message").value;
      $.ajax({
              // 渡したいデータをurlのクエリパラメータで指定
              url: "contacts/store",
              type: "post",
              // dataType: "json",
              headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              // headers: {
              //   'Content-Type': 'application/json',
              // },
              data:{
                'name':name,
                'address':address,
                'message':message
              }
            })
              .done(function (data, testStatus, jqXHR) {
                  document.querySelector("#postMesParent").innerHTML=`
                  <p id="postMes" class='py-2 px-8 text-white mx-auto bg-indigo-500' style="font-size: 50px; border-radius: 10px; z-index: 99;">Message sent.</p>
                  `;
                  $('#postMes').fadeOut(5000);
                  document.querySelector("#name").value='';
                  document.querySelector("#email").value='';
                  document.querySelector("#message").value='';
            })
              .fail(function (jqXHR, textStatus, erorThrown) {
                document.querySelector("#postMes").innerHTML='通信エラー'
            });
         }

         function blogCreate(){
      const blogTitle = document.querySelector("#blogTitle").value;
      const blogContents = document.querySelector("#blogContents").value;

      console.log(blogContents);

      $.ajax({
              // 渡したいデータをurlのクエリパラメータで指定
              url: "/blog/create/store",
              type: "post",
              dataType: "json",
              headers: {
                'Content-Type': 'application/json',
              },
              data: JSON.stringify({
                'title':blogTitle,
                'blogContents':blogContents
              })
            })
              .done(function (data, testStatus, jqXHR) {
            })
              .fail(function (jqXHR, textStatus, erorThrown) {
                document.querySelector("#postMes").innerHTML='通信エラー'
            });
    }
  </script>
  </body>
</html>