<div class="container">
    @if ($books->count())
        <div class="row">
            @foreach ($books as $book)
            <div class="col-md-3">
                <div class="card mt-2">
                    <img src="{{ asset($book->image) }}" class="card-img-top" alt="{{ $book->name }}">
                    <div class="card-body">
                        <h3 class="card-title fs-4">{{ $book->title }}</h3>
                        <p class="card-text mb-0">by</p>
                        <p class="card-text mt-0 mb-1 fs-5">{{ $book->author }}</p>
                        <a href="{{ route('get_book_detail', ['id' => $book->id]) }}" class="btn btn-primary">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-3">There is no book...</p>
    @endif
    {{-- Untuk pagination menggunakan bootstrap (sudah diubah sehingga tidak menggunakan tailwind) --}}
    <div class="mt-3 d-flex justify-content-center">
        {{ $books->links() }}
    </div>
</div>
