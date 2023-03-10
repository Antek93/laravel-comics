@extends('home')
@section('contents')
    @foreach ($comics as $comic)
            <div>
                {{ $comic['title'] }}
            </div>
        </div>
    @endforeach
@endsection
