
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">DSTBookstore</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <li class="nav-item{{request()->is('/') ? ' active' : '' }}">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item{{request()->is('about') ? ' active' : '' }}">
          <a class="nav-link" href="about">About</a>
        </li>
        <li class="nav-item{{request()->is('contact') ? ' active' : '' }}">
            <a class="nav-link" href="contact">Contact</a>
        </li>
        <li class="nav-item{{request()->is('books') ? ' active' : '' }}">
            <a class="nav-link" href="products/index">Books</a>
        </li>
      </ul>
      <div class=" my-2 my-lg-0">
        <ul class="navbar-nav">
            <li class="nav-item btn btn-primary" style="margin-right: 5px;">
                <a href="" style="color: white;">login</a> 
            </li>
            <li class="nav-item btn btn-primary" style="margin-right: 5px;">
                <a href="" style="color: white;">register</a> 
            </li>
            <li class="nav-item btn btn-danger">
                <a href="" style="color:white;">logout</a>
            </li>
        </ul>
    </div>
    </div>
  </nav>