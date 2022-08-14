<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fashionstore - Dashboard</title>

    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

  
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

 
    <div id="wrapper">

      <?php include('slider.php'); ?>
      
        <div id="content-wrapper" class="d-flex flex-column">

       
            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

              
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-nav ml-auto">

                     
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                          
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                  
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                     
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                           
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                            
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                        
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                    
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Vishnu Satheesh</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                       
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
               
                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Add Product</h1>
                    </div>

<form action="../logics/addproduct-logic.php" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Product name">
    </div>
    <div class="form-group col-md-6">
      <label for="sh-desc">Short description</label>
      <input type="text" class="form-control" name="short_des" id="sh-desc" placeholder="Product description">
    </div>
  </div>
  <div class="form-group">
    <label for="desc">Detailed Description</label>
    <input type="text" class="form-control" name="description" id="desc" placeholder="Detailed Description">
  </div>


  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="a-price">Actual Price</label>
      <input type="text" class="form-control" name="old_price" id="a-price" placeholder="Actual Price">
    </div>
    <div class="form-group col-md-6">
      <label for="sh-desc">Sale Price</label>
      <input type="text" class="form-control" name="price" id="sh-desc" placeholder="Sale Price">
    </div>
  </div>

<div class="form-row">
    <div class="form-group col-md-6">
          <label for="a-price">Category</label><br/>
  <select class="custom-select" id="inputGroupSelect01" name="category">
    <option selected>Choose...</option>
    <option value="Men">Men</option>
    <option value="Women">Women</option>
  </select>
    </div>
  </div>



  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="a-price">Main Image</label><br/>
      <input type="file" name="image" id="a-price" placeholder="Actual Price">
    </div>
    <div class="form-group col-md-6">
      <label for="sh-desc">Description image</label><br/>
      <input type="file" name="desc-img" id="sh-desc" placeholder="Sale Price">
    </div>
  </div>

  
  
  <!-- <div class="form-row">
       <div class="form-group col-md-6">
       <label class="ml-4">Upload Main image</label><br/>
    <div class="file-input ml-4">
      <input
        type="file"
        name="image"
        id="file-input"
        class="file-input__input"
      />
      <label class="file-input__label" for="file-input">
        <span>Upload Image</span></label>
    </div>
 </div>
</div> -->

<!-- <div class="form-row">
    <div class="form-group col-md-6">
    <label class="ml-4">Upload description image</label><br/>
  <div class="file-input ml-4">
      <input
        type="file"
        name="desc-img"
        id="file-input"
        class="file-input__input"
      />
      <label class="file-input__label" for="file-input">
        <span>Upload Image</span></label>
    </div>
  </div>
 </div> -->





  <!-- <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <button type="submit" name="pro-add" class="btn btn-primary">Add</button>
</form>

                </div>
               

            </div>
           
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Fashionstore 2023</span>
                    </div>
                </div>
            </footer>
       

        </div>
      

    </div>
   
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="adminlogin.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <script src="js/sb-admin-2.min.js"></script>

   
    <script src="vendor/chart.js/Chart.min.js"></script>

  
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

<style>
   input::file-selector-button {
    font-weight: bold;
    color: dodgerblue;
    padding: 0.5em;
    border: thin solid grey;
    border-radius: 3px;
}

</style>


</body>

</html>




