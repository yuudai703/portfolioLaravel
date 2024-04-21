<div class="blogBlock">
    <img id="myPro" style='width: 35%; height: auto; margin-left: 10%;' src="{{asset('thought-catalog-o0Qqw21-0NI-unsplash.jpg')}}" alt="bloglogo" />
    <div class="blogcontents">
    <h1 style="text-align: center; margin-top: 60px; margin-bottom: 20px;"><span style="border-bottom: 1px solid #000; padding-bottom: 5px;">Blog</span></h1>
      <ul id='blog' class="list-disc list-inside">
        @if(isset($data))
          @forEach($data as $d)
            <li style="display: flex; ">
              <a class="custom-text" style="margin-left: 40%;" href="{{asset("/blog/show/".$d->id)}}">・{{$d->title}}</a>
            </li>
          @endforEach
        @endif
      </ul>
    </div>
</div>
<div style="height: 30%;"> </div>


<script>

// export function blogSet(element){
//     console.log('ok');
//     $.ajax({
//         // 渡したいデータをurlのクエリパラメータで指定
//         url: "/blog",
//         type: "get",
//         dataType: "json",
//         headers: {
//           'Content-Type': 'application/json',
//         }
//       })
//     .done(function (data, testStatus, jqXHR) {
//         data.forEach(function(d){
//             console.log(d);
//             element.innerHTML+=`<li style="display: flex; "><a class="custom-text" style="margin-left: 40%;" href="/blog/show/${d.ID}">・${d.title}</a></li>`
//         });
//     })
//         .fail(function (jqXHR, textStatus, erorThrown) {
//           document.querySelector("#postMes").innerHTML='blog通信エラー'
//       });
// }


// export function blogGet(blogTitle,blogContents){
//     const pathSegments = window.location.pathname.split('/');
//     const blogId = pathSegments.pop() || pathSegments.pop();
//     $.ajax({
//         // 渡したいデータをurlのクエリパラメータで指定
//         url: "/blog/get/"+blogId,
//         type: "get",
//         dataType: "json",
//         headers: {
//           'Content-Type': 'application/json',
//         }
//       })
//     .done(function (data, testStatus, jqXHR){

//             const blog = data[0];
//             blogTitle.innerHTML=`${blog.title}`;
//             blogContents.innerHTML=`${blog.contents}`;
//             hljs.highlightAll();
//     })
//         .fail(function (jqXHR, textStatus, erorThrown) {
//             console.log(erorThrown);
//       });
// }





</script>