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
    </div>

      <img id="myPro" style='width: 25%; height: auto; float: right; margin-right:5%;' src={{asset('pro.jpg')}} class="logo vanilla" alt="logo" />
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