@extends("layout")

@section("title")
    Заявка
@endsection
@section("dynamicContent")
{{--    @foreach($list_note as $el)--}}
        <div class="alert alert-warning" style="cursor: pointer">
            <h3>{{$list_note["message"]}}</h3>
            <b>имя автора: {{$list_note["name"]}}</b>
            <b>Дата создания: {{$list_note["created_at"]}}</b>
        </div>
{{--    @endforeach--}}
@endsection
