@extends("layout.app")
@section("content")
<form method="post" action="store">
    {{ csrf_field() }}
    <input type="text" name="title" style=" background-color:red;width: 20%; height: 20%">
    <textarea name="contents" style="width: 60%; height: 60%;">
    </textarea>
    <button>
        send!!
    </button>
</form>
@endsection