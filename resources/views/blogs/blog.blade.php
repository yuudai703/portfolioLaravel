@extends("layout.app")
@section("content")
<div class='divBtn mx-auto mt-5 p-4 block rounded-lg'>
    <button class="back-btn text-black hover:text-white focus:outline-none font-bold py-2 px-4 rounded" onclick="history.back()" style="font-size: 30px;">
    <<戻る
    </button>
</div>
<div class="blogTitle" style='font-size: 30px;' id="blogTitle">
  {{$blog->title}}
</div>
<div class=" mx-auto mt-5 p-4 bg-white block shadow-lg rounded-lg Headline contentsBlockBlog">
  <div id="blogContents">
    {{$blog->contents}}
  </div>
</div>
@endsection