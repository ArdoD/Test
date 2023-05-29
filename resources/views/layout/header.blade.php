<div class="w-100 d-flex justify-content-center align-items-center" style=" height:5vw; background-color:coral;">
    <h1 style="color: white">
        Helow Fellas
    </h1>
</div>
<div class="d-flex justify-content-center align-items-center" style="margin-bottom:1vw">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/publisher">Publisher</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a href='' class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Category
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @php
                    $category = App\Models\Category::all();
                @endphp
                @foreach ($category as $category)
                    <a class="dropdown-item" href="/category/{{$category->id}}">{{$category->name}}</a>
                @endforeach
                {{-- <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a> --}}
              </div>
            </li>
          </ul>
        </div>
      </nav>
</div>
