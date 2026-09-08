<section class="text-gray-600 body-font relative">
  <div class="container px-0  mx-auto">
    {{-- <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify.</p>
    </div> --}}
    <div id="postMesParent" style="position: absolute; right:0px; top:-35px; z-index: 99; text-align: center;">
    </div>
    <div class="">
      <div class="flex flex-wrap -m-2">
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button onclick="contactSubmit()" class="flex mx-auto text-white bg-[#BE8871]/90 border-0 py-2 px-8 focus:outline-none hover:bg-[#c18064] rounded text-lg">Button</button>
        </div>
        
      </div>
    </div>
  </div>
</section>

<script>
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
                  <p id="postMes" nowrap class='flex py-2 px-8 text-white mx-auto bg-indigo-400 text-center' style="font-size: 12px; border-radius: 10px; z-index: 99;">
                    <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                      <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m12 18-7 3 7-18 7 18-7-3Zm0 0v-5"/>
                    </svg>
                    Message sent. OK!
                  </p>
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
</script>