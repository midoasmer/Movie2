@extends('App')

@section('content')

    <form method="GET" action="/Actor/{{$actor->id}}/edit">
        <ul>

            <h1>Actor Name:  {{$actor->Name}}</h1><br>
            <h1>Date of Barth: {{$actor->birthdate}}</h1><br>
            <h1>Gender: {{$actor->gender}}</h1><br>
            <div class="image-container">
                <img height="200" src="/images/{{$actor->Image}}">

            </div>
        </ul>
{{--        <input type="submit" value="Update">--}}
    </form>
{{--    {!! Form::open(['method'=>'DELETE','action'=>['App\Http\Controllers\ActorController@destroy',$actor->id]]) !!}--}}

{{--    {!! Form::submit('Delete Actor',['class'=>'btn btn-danger']) !!}--}}

{{--    {!! Form:: close() !!}--}}


    {{--    <form method="post" action="/Movie/{{$movie->id}}">--}}
    {{--        <input type="hidden" name="_method" value="DELETE">--}}
    {{--        @csrf--}}
    {{--        <input type="submit" value="Delete">--}}
    {{--    </form>--}}


    <form method="GET" action="/Actor">
        <input type="submit" value="Actor List">
    </form>

@endsection

