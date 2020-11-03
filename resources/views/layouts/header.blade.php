{{-- <div class="container"> --}}
  <nav class="container navbar navbar-expand-sm">
    <!-- Brand/logo -->
    <a class="navbar-brand col-md-2 p-0" href="#">TIHope</a>

    <!-- Links -->
    <ul class="navbar-nav col-md-6 d-flex justify-content-end" >
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline col-md-2" action="/action_page.php">
      <div class="input-group mb-3 mt-3 p-0">
            <input type="text" class="form-control" id="myInput" style="color: #6b8a3c" placeholder="Search">
                <div class="input-group-append" id="myDIV">
                    <button class="btn border border-left-0" style="background: #ffffff;" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
        </div>
    </form>
    <div class="nav-link mr-1 col-md-2" href="{{url('/login')}}">
      <button type="button btn-login" class="btn" style="width: 120px; height: 40px;background-color: #EECB2D; color:#FFFFFF">Masuk</button>
    </div>
  </nav>
{{-- </div> --}}