@extends('layout.main')

@section('content')
    <div id="content-section">
        <div class="comic">
            <h2>{{$comic['title']}}</h2>
            <div class="price">{{$comic['price']}}</div>
            <p>{{$comic['description']}}</p>
        </div>
    </div>
@endsection