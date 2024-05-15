@extends("layout.app")
@section("content")


<table style="width: 100%;">
    <thead>
        <tr>
            <th class="border px-4 py-2">id</th>
            <th class="border px-4 py-2">access時間</th>
        </tr>
    </thead>
    <tbody>
        @foreach($access as $a)
         <tr>
            <td class="border px-4 py-2" style="width: 10%;">{{$a->id}}</td>
            <td class="border px-4 py-2" style="width: 20%;">{{$a->updated_at}}</td>
        </tr>
        @endforeach
    </tbody>

</table>


@endsection