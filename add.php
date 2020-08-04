
        <!-- Begin Page Content -->
        <div class="container-fluid">
             <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Add Post</h6>
                 

                </div>
                <!-- Card Body -->
                <div class="card-body">
                  <div class="chart-area">

                <form class="user" action="email.php" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" autocomplete="off" class="form-control form-control-user" name="post_sub" placeholder="Post subject">
                  </div>  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" autocomplete="off" class="form-control form-control-user" name="post_name" placeholder="Post name">
                  </div>

                  <div class="col-sm-6">
                    <input type="email" class="form-control form-control-user" id="search"  name="post_email" placeholder="Post email" autocomplete="off"> 
                    

                  </div>
                </div>
                <div class="form-group">
                  <input type="text" autocomplete="off" class="form-control form-control-user" name="post_description" placeholder="Post Description">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" autocomplete="off" class="form-control form-control-user" name="post_link" placeholder="Post Link">
                  </div>
                  
                <button type="submit" class="btn btn-primary btn-user btn-block">Submit</button> 
                  
                <hr>
               
              </form>                    
                  </div>
                </div>
              </div>
            </div>  
        <!-- /.container-fluid -->
</div>
      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
    <script src="post_script.js"></script>


</body>

</php>


