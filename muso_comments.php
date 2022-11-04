
<?php include("includes/muso_header.php");?> 
<?php 
    
if(isset($_GET['post_id'])){
    if(isset($_POST['send'])){
    $post_id=$_GET['post_id'];
    $post_body=$_POST['post_text'];
    //write the sql to insert into the comments
    $sql="insert into comments set post_body='$post_body',posted_by='$userLoggedIn',
    date_added=Now(),
    post_id= $post_id
    ";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location:muso_posts.php");
    }
}
}

?>
<form class="post_form" action="" method="POST" enctype="multipart/form-data">
			            <textarea name="post_text" id="post_text" placeholder="Got something to say?"></textarea>
		            	<input type="submit" name="send" id="post_button" value="send">
		             	<hr>
	               	</form>