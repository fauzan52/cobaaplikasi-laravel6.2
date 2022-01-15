<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
      <a class="navbar-brand" href="/">Website Fauzan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ $title === "Home" ? "active" : '' }}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "Post" ? "active" : '' }}" href="/posts">Post</a>
          </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === "Category" ? "active" : '' }}" href="/categories">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ $title === "Author" ? "active" : '' }}" href="#">Author</a>
            </li>
          <li class="nav-item">
            <a class="nav-link {{ $title === "About" ? "active" : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" class="nav-link {{ $title === "Kuis 1" || "Kuis 2" || "Kuis 3" ? "active" : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/kuis1">Kuis 1</a></li>
              <li><a class="dropdown-item" href="/kuis2">Kuis 2</a></li>
              <li><a class="dropdown-item" href="/kuis3">Kuis 3</a></li>
            </ul>
          </li>

        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
