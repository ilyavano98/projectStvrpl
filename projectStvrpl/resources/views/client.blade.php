@extends("layout")

@section("title")
    Клиент
@endsection
@section("dynamicContent")

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/client/check">
        @csrf

        @if(session()->get('mesg') != "
")
            <h2> {{ session()->get('mesg') }} </h2>
        @endif
        <h1>Форма заявления</h1>
        <input type="text" name="email" placeholder="введите email" value="" class="form-control"/>
        <textarea type="text" name="message" placeholder="введите email" class="form-control"></textarea>
        <input type="submit" name="btnConf" value="Подтвердить"/>
    </form>
@endsection
