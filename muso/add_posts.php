<?php include("partials/sidebar.php");?>
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
<section class="attendance"style="width:70%;margin:auto">
        <div class="attendance-list">
    <form method="post" action="" enctype="multipart/form-data">

    <h1 style="text-align:center">add posts</h1>
    <center>
      <div class="form-outline mb-4 m-auto" style="width:100;border:1px solid gray">
      <label for="product_title" class="form-label"> the body of the posts</label><br>
      <input type="text" name="post_body" class="form-control" placeholder="enter the post description" autocomplete="off" required style="width:100%">
       </div>
</center>
<center>
      <div class="form-outline mb-4 m-auto" style="width:100;border:1px solid gray">
      <label for="product_title" class="form-label"> the date added</label><br>
      <input type="date" name="date" class="form-control" placeholder="enter product title" autocomplete="off" required style="width:100%">
        </div>
</center>
        <div class="form-outline mb-4 w-50 m-auto">
<label for="post_image" class="form-label">the post image</label><br>
<center>
 <input type="file" name="post_image" class="form-control"  required style="width:100%">
</center>
 </div>
<div class="form-outline mb-4 w-50 m-auto"><br>
<input type="submit" name="add_post" class="btn btn-info" value="add posts" style="width:100%;height:3rem"/>
</div>
        </form>
        </div>
      </section>