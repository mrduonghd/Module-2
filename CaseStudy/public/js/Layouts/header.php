  <div id="header" class="menu sticky-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="#">D Store</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="productview.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="index.php?page=pEdit">Products Manager</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="login.php">Login</a>
                          <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" action="productview.php" method="post">
                  <input class="form-control mr-sm-2" type="search" placeholder="Name or Vendor" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
  </div>