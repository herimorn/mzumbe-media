<?php include("partials/sidebar.php");?>
                         
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