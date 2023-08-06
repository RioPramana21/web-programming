@extends('layouts/main')

@section('body')
    <div class="container mb-2">
        @include('partials.body_header')
        <div class="card mt-2">
            <img src="{{ asset($book->image) }}" class="card-img-top" alt="{{ $book->name }}">
            <div class="card-body">
                <p class="card-text">Title : {{ $book->title }}</p>
                <p class="card-text">Author : {{ $book->author }}</p>
                <p class="card-text">Publisher : {{ $book->publisher->name }}</p>
                <p class="card-text">Year : {{ $book->year }}</p>
                <p class="card-text">Synopsis :</p>
                <p class="card-text">{{ $book->synopsis }}</p>
            </div>
        </div>
    </div>
@endsection
