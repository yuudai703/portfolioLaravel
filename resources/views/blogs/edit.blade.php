@extends("layout.app")
@section("content")
<div style="justify-content: center;">
<form method="post" action="update">
    @method('PUT')
    @csrf
    <input type="hidden" value="{{$blog->id??null}}" name="id">
    <input value="{{$blog->title??null}}" type="text" name="title" style="margin-left: 20%; float: center; background-color:red;width: 20%; height: 20%">
    <br>
    <textarea name="contents" style="width: 60%; height: 1000px; margin-left: 20%;">
        {{$blog->contents??null}}
    </textarea>
    <button>
        send!!
    </button>
</form>
</div>
@endsection