
<?php include("partials/sidebar.php");?>
<?php include("partials/header.php");?>
<?php 
       $username=$_SESSION['username'];
       //if we submit the values using the post methods
       if(isset($_POST['add_post'])){
            //accessing the variable
               $post_body=$_POST['post_body'];
               $date=$_POST['date'];
             echo $post_image=$_FILES['post_image']['name'];
               //inserting the queries into the databases
               $temp_image1=$_FILES['post_image']['tmp_name'];
            
               //moving the uploaded files into the tempolary storage
               move_uploaded_file($temp_image1,"./images/$post_image");
               //if is arleady moved then insert into the database
               $sql="insert into posts set body='$post_body',
               added_by='$username',
               user_to='none',
               date_added='$date',
               user_closed='no',
               deleted='no',
               likes=0,
               image='$post_image'";
               $result=mysqli_query($conn,$sql);
               if($result){
                echo "<script>alert('post added successfully')</script>";
                echo "<script>window.open('index.php','__self'</script>";
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

                <h1 class="h4 text-gray-900 mb-4 d-flex text-center text-center" >add posts</h1>
                <div class="form-outline mb-4 m-auto">
                <label for="product_title" class="form-label"> the body of the posts</label>
                <input type="text" name="post_body" class="form-control" placeholder="enter the post description" autocomplete="off" required>
                  </div>
                  <div class="form-outline mb-4 m-auto">
                <label for="product_title" class="form-label"> the date added</label>
                <input type="date" name="date" class="form-control" placeholder="enter product title" autocomplete="off" required>
                  </div>
                   <div class="form-outline mb-4 w-50 m-auto">
                <label for="post_image" class="form-label">the post image</label>
                 <input type="file" name="post_image" class="form-control"  required>
                 </div>
             <div class="form-outline mb-4 w-50 m-auto">
               <input type="submit" name="add_post" class="btn btn-info" value="add posts" style="width:100%"/>
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