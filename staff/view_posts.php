<?php include("partials/sidebar.php");?>
<?php include("partials/header.php");?>
<?php include("partials/connection.php");?>
<body>
    
<div class="container">
  <h2>all posts</h2>
<p>This is the list of all staff posts</p>   
<table class="table"> 
<thead>
      <tr>
        <th>sn</th>
        <th>username</th>
        <th>posts</th>
      </tr>
    </thead>        

  <tbody>
    <?php 
    $sql="SELECT * FROM users,posts where users.username=posts.added_by";
    $res=mysqli_query($conn,$sql);
    if($res){
        $sn=1;
        while($row=mysqli_fetch_array($res)){
                $added_by=$row['added_by'];
                $body=$row['body'];
                ?>
                
      <tr>
        <td><?php echo $sn?></td>
        <td><?php echo $added_by;?></td>
        <td><?php echo $body?></td>
      </tr>
                <?php
                 $sn++;
        }
       
    }
    ?>



      
    </tbody>
  </table>
</div>

</body>
<?php include("partials/footer.php");?>