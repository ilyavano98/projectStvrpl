@extends("layout")

@section("title")
    Менеджер
@endsection
@section("dynamicContent")
@foreach($list_note as $el)
    <div class="alert alert-warning" onclick="window.open('/manager/{{$el->id}}')" style="cursor: pointer">
        <h3>{{$el->message}}</h3>
        <b>{{$el->created_at}}</b>
    </div>
@endforeach
@endsection
