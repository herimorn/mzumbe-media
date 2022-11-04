<?php include("partials/sidebar.php");?>
<?php include("partials/header.php");?>
<?php include("partials/connection.php");?>
<body>
    
<div class="container">
  <h2>all staffs</h2>
<p>This is the list of all staff </p>   
<table class="table"> 
<thead>
      <tr>
        <th>sn</th>
        <th>username</th>
      </tr>
    </thead>        

  <tbody>
    <?php 
    $sql="SELECT * FROM users where users.user_role='staff'";
    $res=mysqli_query($conn,$sql);
    if($res){
        $sn=1;
        while($row=mysqli_fetch_array($res)){
                $username=$row['username'];
                ?>
                
      <tr>
        <td><?php echo $sn?></td>
        <td><?php echo $username;?></td>
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