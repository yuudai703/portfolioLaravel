<div class="AboutMe">
    <div class="aboutMeContents">
    <h1 class="aboutMeTitl" style="width: 400px; border-bottom: 1px solid #000;">AboutMe</h1>
        <p>
          name: 新井勇大
        </p>
        <p id='age'>
        age:
        </p>
        <p>from：長野県 長野市</p>
        <p>hobby：筋トレ　サウナ</p>
        <br>
        <p class="aboutMeP" style="width: 80%; white-space:normal;" class="text-gray-600">
        高校時代はソフトテニスでインターハイに出場。
        体を動かすことが好きで週4回、ジムでトレーニングしています。
        </p>
        <br>
        <p style="width: 300px; font-size:30px; border-bottom: 1px solid #000;">日々意識していること<br>目指したい人材</p>
        <br>
        <p id="sinka" style="width: 80%; white-space:normal; opacity: 0;">
          <span style=" font-size:30px;">深化</span><br>
          今は生成AIがあり理解しなくてもなんとなく動かすことはできますが、
          技術の領域において基礎から細部まで徹底的に理解し深めることが
          、問題解決能力や技術の応用力にがつくのではないかと考えます。
          自分にとっての技術力の定義のハードルを下げないようにしたいです。
        </p>
        <br>
        <p id="sojo" style="width: 80%; white-space:normal; opacity: 0;">
          <span style="font-size:30px;">相乗効果</span><br>
          プロジェクトは緊迫感があって当たり前ですが
          人間は感情の生き物であり、
          全員が最高のパフォーマンスを発揮するためには精神的な配慮が必要なときがあると私は思います。
          最終的な目的のために
          チームとって良い影響を与える存在になりたいです。
        </p>

    </div>

      <img id="myPro" style='width: 25%; height: 10%; float: right; margin-right:5%;' src={{asset('pro.jpg')}} class="logo vanilla" alt="logo" />
  </div>

  <script>
  function ageCounter(element) {
    let today = new Date();
    let year = today.getFullYear();
    let month = today.getMonth() + 1;
    let day = today.getDate();
    const age =(year-1997)-((month.toString()+day.toString().padStart(2, '0'))<1215?1:0);
    element.innerHTML='age:'+age;
  }
  ageCounter(document.getElementById("age"));




  </script>