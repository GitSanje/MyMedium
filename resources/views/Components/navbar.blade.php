

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">MyMedium</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"></a>
        </li>
       
      </ul>
      <form class="d-flex me-auto search-form">
        <input class="form-control me-2" type="search" name ="search" placeholder="Search" aria-label="Search" value="{{request('search')}}">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">
        <li class="nav-item px-2">
          <a class="nav-link fa-lg" href="#">Post <i class="fas fa-pencil-alt "></i></a>
      </li>
      <li class="nav-item px-2">
          <a class="nav-link" href="#"><i class="fa-solid fa-bell fa-lg"></i></a>
      </li>
      <li class="nav-item px-2">
          <a class="nav-link" href="#"><i class="fas fa-user fa-lg"></i></a>
      </li>
      
      </ul>

      
    </div>
  </div>
</nav>


