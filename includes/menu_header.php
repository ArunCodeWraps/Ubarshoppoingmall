<section>
  <div class="megamenu">
    <nav class="navbar navbar-expand-lg navbar-light search_cart">
      <a class="navbar-brand" href="#">
        <img src="img/logo2.png" width="200px" class="rounded">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <div class="input-group mb-2">
              <div class="input-group-prepend searchlisting">
                <div class="input-group-text">
                  <select class="form-control shadow-none">
                    <option>Listing</option>
                    <option>People</option>
                  </select>
                </div>
              </div>
              <input type="text" class="form-control" placeholder="Search All Kid's Listings">
              <div class="input-group-prepend searchicon">
                <div class="input-group-text">
                  <i class="fas fa-search"></i>
                </div>
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Login </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#">Sign Up</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- mega menu main  -->
    <nav class="navbar navbar-expand-lg navbar main-menu">
      <a class="navbar-brand" href="#">
        <select class="dropSelect">
          <option>All</option>
          <option>Men</option>
          <option>Women</option>
          <option>Kids</option>
          <option>Home</option>
          <option>Luxury</option>
        </select>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ul-hover">
          <?php 
            for ($i=0; $i < 8 ; $i++) { ?> 
              <li class="nav-item dropdown has-mega-menu" style="position:static;">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Accessories</a>
            <div class="dropdown-menu">
              <div class="px-0 container">
                <div class="row">
                  <div class="col-md-2">
                    <div class="dropdown-items">
                      <h5>Accessories</h5>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item" href="#">Or a link</a>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="dropdown-items">
                      <h5>Accessories</h5>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item" href="#">Or a link</a>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="dropdown-items">
                      <h5>Accessories</h5>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item" href="#">Or a link</a>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="dropdown-items">
                      <h5>Accessories</h5>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item" href="#">Or a link</a>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="dropdown-items">
                      <h5>Accessories</h5>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                      <a class="dropdown-item" href="#">Or a link</a>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <?php }
           ?>
        </ul>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">How it Works </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><img src="img/sale.png"> Sell on Uber</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
</section>