
<?php include("partials/sidebar.php");?>
<?php include("partials/header.php");?>
<?php 
       $username=$_SESSION['username'];
       //if we submit the values using the post methods
       if(isset($_POST['add_staff'])){
                   $staff_name=$_POST['staff_name'];
                   $email=$_POST['email'];
                  $password=md5($_POST['password']);
                  //inserting the staff details in the databases
                  $sql="insert into users set username='$staff_name',email='$email',password='$password',user_role='staff'";
                   $result=mysqli_query($conn,$sql);
                   if($result){
                    echo "success";
                   }
             
       }
?>
                <div class="container-fluid">

                    <!-- 404 Error Text -->
                    <div class="text-center">
                      

                        <!--contents should be written here-->
                         
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
                <form method="post" action="" enctype="multipart/form-data">

                <h1 class="h4 text-gray-900 mb-4 d-flex text-center text-center" >add staff</h1>
                <div class="form-outline mb-4 m-auto">
                <label for="product_title" class="form-label"> the name of staff</label>
                <input type="text" name="staff_name" class="form-control" placeholder="enter the staff name" autocomplete="off" required>
                  </div>
                  <div class="form-outline mb-4 m-auto">
                  <label for="product_title" class="form-label"> email of staff</label>
                <input type="text" name="email" class="form-control" placeholder="enter the staff email" autocomplete="off" required>
                  </div>
                  <div class="form-outline mb-4 m-auto">
                  <label for="product_title" class="form-label"> staff password</label>
                <input type="text" name="password" class="form-control" placeholder="enter the staff password" autocomplete="off" required>
                  </div>
        
             <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="add_staff" class="btn btn-info" value="add staffs" style="width:100%"/>
            </div>
                        </form>
                        <hr>
                    
            </div>
        </div>
    </div>

</div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
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
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
 <!-- Footer -->
 <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>