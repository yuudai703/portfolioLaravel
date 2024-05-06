@extends("layout.app")
@section("content")


<table style="width: 100%;">
    <thead>
        <tr>
            <th class="border px-4 py-2">名前</th>
            <th class="border px-4 py-2">アドレス</th>
            <th class="border px-4 py-2">内容</th>
            <th class="border px-4 py-2">送信時間</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
         <tr>
            <td class="border px-4 py-2" style="width: 10%;">{{$contact->name}}</td>
            <td class="border px-4 py-2" style="width: 20%;">{{$contact->address}}</td>
            <td class="border px-4 py-2">{{$contact->message}}</td>
            <td class="border px-4 py-2" style="width: 10%;">{{$contact->created_at}}</td>
        </tr>
        @endforeach
    </tbody>

</table>


@endsection