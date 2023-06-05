@extends('layout')

@section('title')
    hello
@endsection

@section('content')
    hello 페이지 입니다.
    @foreach ($books as $book)
        <li>{{ $book }}</li>
        
    @endforeach
@endsection