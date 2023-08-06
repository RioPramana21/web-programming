@extends('layouts/main')

@section('body')
    <div class="container mb-2">
        @include('partials.body_header')
        @include('partials.book_cards_pagination')
    </div>
@endsection
