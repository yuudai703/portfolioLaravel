<div class="AboutMe">
    <div class="aboutMeContents">
    <h1 class="aboutMeTitl" style="width: 400px; border-bottom: 1px solid #000;">AboutMe</h1>
        <p class='fontphon'>
          name: 新井勇大
        </p>
        <p id='age' class='fontphon'>
        age:
        </p>
        <p class='fontphon'>from：長野県 長野市</p>
        <p class='fontphon'>hobby：目的のない田舎道のドライブ</p>
        <br>
        <p class="aboutMeP" style="width: 80%; white-space:normal;" class="text-gray-600 fontphon">
        <span class="fontphon">
        高校時代はソフトテニスでインターハイに出場。<br>
        今は趣味でトレーニングしています。
      </span>
      </p>
        <br>
        <p style="width: 300px; font-size:30px; border-bottom: 1px solid #000;">Policy</p>
        <br>
        <p id="sinka" style="width: 80%; white-space:normal; opacity: 0;">
          <span style=" font-size:30px;">深化</span><br>
          <span class="fontphon">
          今は生成AIがあり理解しなくてもなんとなく動かすことはできますが、
          技術の領域において基礎から細部まで徹底的に理解し深めることが
          、問題解決能力や技術の応用力がつくのではないかと考えます。
          自分にとっての技術力の定義のハードルを下げないようにしたいです。
          </span>
        </p>
        <br>
        <p id="sojo" style="width: 80%; white-space:normal; opacity: 0;">
          <span style="font-size:30px;">相乗効果</span><br>
          <span class="fontphon">
          プロジェクトは緊迫感があって当たり前ですが
          人間は感情の生き物であり、常に張り詰めた状態では、最高のパフォーマンスを発揮できないのではと考えます。時には場を和ます様なジョークが必要であり。技能だけでなくチームにとって良い影響を与える存在になりたいです。
          </span>
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


{{-- <style>
  #policy1{
  font-size: 14px!important;
 }

 #policy2{
  font-size: 14px!important;
 }


</style> --}}