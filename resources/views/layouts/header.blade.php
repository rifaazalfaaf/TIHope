{{-- <div class="container"> --}}
  <nav class="container navbar navbar-expand-sm mt-1">
    <!-- Brand/logo -->
    <a class="navbar-brand col-md-2 p-0 font1 logo" href="#">TIHope</a>

    <!-- Links -->
    <ul class="navbar-nav col-md-5 d-flex justify-content-end" >
      <li class="nav-item">
        <a class="nav-link home font2" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link about font2" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link contact_us font2" href="#">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline col-md-3" action="/action_page.php">
      <div class="input-group mb-3 mt-3 p-0 rounded">
            <input type="text" class="form-control search_box font2" id="myInput" style="color: #6b8a3c" placeholder="Search">
                <div class="input-group-append" id="myDIV">
                    <button class="btn border  button_box border-left-0" style="background: #ffffff;" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
        </div>
    </form>
    <div class="nav-link mr-1 col-md-2" href="{{url('/login')}}">
      <button type="button btn-login" class="btn font2" style="width: 120px; height: 40px;background-color: #EECB2D; color:#FFFFFF">Masuk</button>
    </div>
  </nav>
{{-- </div> --}}