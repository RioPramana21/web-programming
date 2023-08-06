<nav class="navbar navbar-expand-lg">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link link-primary {{ $active == 'homepage' ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-primary {{ $active == 'categories' ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
                @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="{{ route('get_category_detail', ['id' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link link-primary {{ $active == 'publishers' ? 'active' : '' }}" href="{{ route('get_publishers') }}">Publisher</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-primary {{ $active == 'contact' ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
