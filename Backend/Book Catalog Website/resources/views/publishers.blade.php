@extends('layouts/main')

@section('body')
    <div class="container mb-2">
        @include('partials.body_header')
        <div class="container">
            @if ($publishers->count())
                <div class="row">
                    @foreach ($publishers as $publisher)
                    <div class="col-md-3">
                        <div class="card mt-2">
                            <img src="{{ asset($publisher->image) }}" class="card-img-top" alt="{{ $publisher->name }}">
                            <div class="card-body">
                                <h3 class="card-title fs-4">{{ $publisher->name }}</h3>
                                <p class="card-text mb-0">Address:</p>
                                <p class="card-text mt-0 mb-1">{{ $publisher->address }}</p>
                                <a href="{{ route('get_publisher_detail', ['id' => $publisher->id]) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            @else
                <p class="text-center fs-3">There is no publisher...</p>
            @endif
            {{-- Untuk pagination menggunakan bootstrap (sudah diubah sehingga tidak menggunakan tailwind) --}}
            <div class="mt-3 d-flex justify-content-center">
                {{ $publishers->links() }}
            </div>
        </div>
    </div>
@endsection
