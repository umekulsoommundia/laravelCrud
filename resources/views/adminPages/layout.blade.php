<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>


    <style>
   
      .head{
color:#f36b4b;
      }
      body{
        background-color:#333333;
      }
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}

.signin{
 background-color: #f36b4b;
}
#link{
  color: #f36b4b;

}
.btnsearch{
  color:white;
  background-color:#f36b4b;
}
.btnsearch2{
  color:white;
  background-color:#f36b4b;
  text-decoration:none;
}
    </style>
</head>


<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <img src="{{asset ('images/img1.png')}}" alt="hugenerd" width="40" height="40" class="rounded-circle">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active "  id="link"  aria-current="page" href="profile">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link link"  id="link"  href="#">Logout</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle "  id="link"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="addProduct">Add Product</a></li>
            <li><a class="dropdown-item" href="updateProduct">Update Product</a></li>
            <li><a class="dropdown-item" href="showProduct">Product Table</a></li>
      
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle " id="link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Add Category</a></li>
            <li><a class="dropdown-item" href="#">Add SubCategory</a></li>
          
          </ul>
        </li>
      
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btnsearch" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    <section class="vh-100">
        <div class="container py-5 h-100">
          <div class="row d-flex align-items-center justify-content-center h-100">
   
         

            @yield('main')





            </div>
          </div>
        </div>
      </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>