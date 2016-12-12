@extends('layouts/app')

@section('content')
    <h1>contact page here</h1>
    <ul>

    @if(count($people))
        @foreach($people as $a)
            <li>{{$a}}</li>
        @endforeach
    @endif
    </ul>

@stop

@section('footer')
  <h3>contact's footer here</h3>
@stop