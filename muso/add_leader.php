<?php include("partials/sidebar.php");?>
<?php 
       $username=$_SESSION['username'];
       //if we submit the values using the post methods
       if(isset($_POST['add_leader'])){
                   $lname=$_POST['lname'];
                    $email=$_POST['email'];
                  $password=md5($_POST['password']);
                  //inserting the staff details in the databases
                  $sql="insert into users set username='$lname',email='$email',password='$password',user_role='muso'";
                   $result=mysqli_query($conn,$sql);
                   if($result){
                    echo "success";
                   }
             
       }
?>
<section class="attendance"style="width:70%;margin:auto">
        <div class="attendance-list">
    <form method="post" action="" enctype="multipart/form-data">

    <h1 style="text-align:center">add leader</h1>
    <center>
      <div class="form-outline mb-4 m-auto" style="width:100;border:1px solid gray">
      <label for="product_title" class="form-label">inter the name of the leader</label><br>
      <input type="text" name="lname" class="form-control" placeholder="enter the name" autocomplete="off" required style="width:100%">
       </div>
</center>
<center>
      <div class="form-outline mb-4 m-auto" style="width:100;border:1px solid gray">
      <label for="product_title" class="form-label">inter the email</label><br>
      <input type="email" name="email" class="form-control" placeholder="enter the email" autocomplete="off" required style="width:100%">
       </div>
</center>
<center>
      <div class="form-outline mb-4 m-auto" style="width:100;border:1px solid gray">
      <label for="product_title" class="form-label">inter the password</label><br>
      <input type="password" name="password" class="form-control" placeholder="enter the password" autocomplete="off" required style="width:100%">
       </div>
</center>


<div class="form-outline mb-4 w-50 m-auto"><br>
<input type="submit" name="add_leader" class="btn btn-info" value="add leaders" style="width:100%;height:3rem"/>
</div>
        </form>
        </div>
      </section>