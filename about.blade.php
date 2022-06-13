<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="design/vendors/mdi/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="design/vendors/base/vendor.bundle.base.css" />
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link
      rel="design/stylesheet"
      href="design/vendors/datatables.net-bs4/dataTables.bootstrap4.css"
    />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="design/css/style.css" />
    <!-- endinject -->
    <link rel="shortcut icon" href="design/images/favicon.png" />
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <h4 class="text-center">About Us</h4>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div
            class="card-body card-body-padding d-flex align-items-center justify-content-between"
          >
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
              
                <p class="mb-0 font-weight-medium me-3 buy-now-text">
                 Admin Panal
                </p>

               
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a
                href="https://www.bootstrapdash.com/product/majestic-admin-pro/"
                ><i class="mdi mdi-home me-3 text-white"></i
              ></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        
       
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="index">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">Home</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="about">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">About Us</span>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <h3 class="text-center">About Form</h3>
                  <div
                    class="d-flex justify-content-between align-items-end flex-wrap"
                  >
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body dashboard-tabs p-0">
                    
                    <div class="tab-content py-0 px-0">
                     
                        
                        
                         
                         
                      <div
                        class="tab-pane fade"
                        id="sales"
                        role="tabpanel"
                        aria-labelledby="sales-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                <a
                                  class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                  href="#"
                                  role="button"
                                  id="dropdownMenuLinkA"
                                  data-bs-toggle="dropdown"
                                  aria-haspopup="true"
                                  aria-expanded="false"
                                >
                                  <h5 class="mb-0 d-inline-block">
                                    26 Jul 2018
                                  </h5>
                                </a>
                                
                              </div>
                            </div>
                          </div>
                         
                          <div
                            class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                          
                          </div>
                          
                          
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="purchases"
                        role="tabpanel"
                        aria-labelledby="purchases-tab"
                      >
                        <div
                          class="d-flex flex-wrap justify-content-xl-between"
                        >
                          <div
                            class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item"
                          >
                            <i
                              class="mdi mdi-calendar-heart icon-lg me-3 text-primary"
                            ></i>
                            <div
                              class="d-flex flex-column justify-content-around"
                            >
                              <small class="mb-1 text-muted">Start date</small>
                              <div class="dropdown">
                                
                                <div
                                 
                                
                                >
                                  
                                </div>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        <div class="fullForm">
            <div class="row" id="editForm1" >
              <div class="col-md-12 stretch-card">
                    <div class="card">
                       

                        @if(session()->has('message'))
                        @if(session()->get('message')=="0")
                        <div class="alert alert-danger">
                        <p> Sorry ! You Can Not Insert More Than One Record!</p>

                        </div>
                        @endif 
                        @endif
                        @if(session()->has('message'))
                        @if(session()->get('message')=="1")
                        <div class="alert alert-success">
                        <p> Successfully Inserted</p>

                        </div>
                        @endif 
                        @endif
                        
                        <form id="form1" method="Post" action="{{url('store')}}" class="form-group" role="form"  enctype="multipart/form-data" >
                        @csrf
                            <div >
                                <div class="form-group"class="text-align" >
                                        <label>About Title:</label>
                                        <input type="text" name="about_title" placeholder="Enter Your Title" class="form-control"> 

                                </div>
                                <div>
                                    @error('about_title')
                                        <div class="alert alert-danger">{{ "Please Enter Your Title" }}</div>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label>About Description:</label>
                                    <textarea type="text" name="about_des" placeholder="Enter Your Description" class="form-control"> </textarea>

                                </div>
                                <div>
                                    @error('about_des')
                                        <div class="alert alert-danger">{{ "Please Enter Your Description" }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>add image:</label>
                                    <input type="file" name="about_image"   class="form-control"> 

                                </div>
                                
                                
                                <div>
                                <input type="submit" name="insert" value="insert" class="btn btn-info">
                                </div>
                            </div>
                        </form>
                    </div>
              </div>
               
            </div>

            <br>
            <div class="row" id="editForm2" style="display:none" >
                    <div>
                        <h3>Update form</h3>
                    </div>

                    <div class="col-md-12 stretch-card">
                        <div class="card">
                        @if(session()->has('message'))
                            @if(session()->get('message')=="1")
                            <div class="alert alert-success">
                                <p> Successfully Inserted</p>

                            </div>
                            @endif 
                            @endif
                        
                            <form method="Post" action="{{url('store')}}" class="form-group" role="form"  enctype="multipart/form-data" >
                            @csrf
                            <div >
                                <div class="form-group"class="text-align" >
                                    <label>About Title:</label>
                                    <input type="text" name="about_title" placeholder="Enter Your Title" class="form-control"> 

                                </div>
                                <div>
                                    @error('about_title')
                                        <div class="alert alert-danger">{{ "Please Enter Your Title" }}</div>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label>About Description:</label>
                                    <textarea type="text" name="about_des" placeholder="Enter Your Description" class="form-control"> </textarea>

                                </div>
                                <div>
                                    @error('about_des')
                                        <div class="alert alert-danger">{{ "Please Enter Your Description" }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>add image:</label>
                                    <input type="file" name="about_image"  class="form-control"> 

                                </div>
                                
                                
                                
                                <input type="submit" name="edit" value="edit" class="btn btn-info">
                            </div>
                            </form>
                        </div>
                    </div>
                    
                </div>  
            
           


            </div>
            
            <br>
            <div class="row">
              <div class="col-md-12 stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title"> About Table</h3>
                    <div class="table-responsive">
                      <table id="recent-purchases-listing" class="table">
                      <tr>
                        <th> Id</th>
                        <th>About Title</th>
                        <th>About Description</th>
                        <th>About image</th>
                        <th> Action</th>

                    </tr>
                    @foreach($posts as $post)
                    <tr>
               
                        <td>{{$loop->index+1}}</td>
                        <td>{{$post->about_title}}</td>
                        <td>{{$post->about_des}}</td>
                        <td> <img src="{{ asset('uplode/storage/'.$post->about_image) }} "
                        style=" border: 1px solid #ddd; border-radius: 4px; padding: 2px; width: 150px; " width="150px" title=" image">
                        </td>
                        
                        <td>
                        <button class=" btn btn-info"  id ="editbutton">edit</button> 
                        <a class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                       
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div
              class="d-sm-flex justify-content-center justify-content-sm-between"
            >
              <span
                class="text-muted text-center text-sm-left d-block d-sm-inline-block"
                >Copyright ©
                <a href="https://www.bootstrapdash.com/" target="_blank"
                  >bootstrapdash.com </a
                >2021</span
              >
              <span
                class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
                >Only the best
                <a href="https://www.bootstrapdash.com/" target="_blank">
                  Bootstrap dashboard
                </a>
                templates</span
              >
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!--JQUERY ADD-->
    <script src="js/jquery-latest.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#editbutton").click(function(){
            $("editForm1").hide();
            $("editForm2").show();
        });
        // $("#editbutton").click(function(){
        //     $("editForm2").show();
        // });
    });  
     
    //   $(function(){
    //     $(".editbutton").click(function(event){
    //       var X = $(this).is(':checked');
    //         if(X == true){
    //             $(this).parents("fullForm").find(".editForm2").show();
    //             $(this).parents("fullForm").find(".editForm1").hide();

    //         }
    //         else{
    //             $(this).parents("edit").find(".edit_row").hide();
    //             $(this).parents("edit").find(".about_row").show();
    //         }
    //     });
    //   })
    </script>
    
    <!-- plugins:js -->
   
    <script src="vendors/base/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="vendors/chart.js/Chart.min.js"></script>
    <script src="vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/hoverable-collapse.js"></script>
    <script src="js/template.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/dashboard.js"></script>
    <script src="js/data-table.js"></script>
    <script src="js/jquery.dataTables.js"></script>
    <script src="js/dataTables.bootstrap4.js"></script>
    <!-- End custom js for this page-->

    <script src="js/jquery.cookie.js" type="text/javascript"></script>
         
    
</body>
</html>