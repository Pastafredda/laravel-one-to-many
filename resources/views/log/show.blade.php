@extends('layouts.app')

@section('content')
    <ul>

        <li>{{ $book->author }}</li>
        <li>{{ $book->price }}</li>
        <li>{{ $book->plot }}</li>
        <li>{{ $book->editor }}</li>
        <li>{{ $book->is_available }}</li>

    </ul>
@endsection
