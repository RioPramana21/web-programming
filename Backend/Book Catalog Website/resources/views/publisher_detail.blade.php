@extends('layouts/main')

@section('body')
    <div class="container mb-2">
        <div class="container bg-secondary text-white p-1 mb-1">
            <p>{{ $publisher->name }}</p>
            <p>Address - {{ $publisher->address }}</p>
            <p>Phone - {{ $publisher->phone }}</p>
            <p>Email - {{ $publisher->email }}</p>
        </div>
        @include('partials.book_cards_pagination')
    </div>
@endsection
