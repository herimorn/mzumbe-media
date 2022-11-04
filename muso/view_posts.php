<?php include("partials/sidebar.php");?>
<section class="attendance" style="position:relative;left:10%">
        <div class="attendance-list">
          <h1>all posts</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>added by</th>
                <th>body</th>
                <th>images</th>
                <th>Date posted</th>
              </tr>
            </thead>
            <?php
            $sql="SELECT * FROM users,posts where users.username=posts.added_by and users.user_role='muso'";
           $res=mysqli_query($conn,$sql);
             if($res){
              $sn=1;
              while($row=mysqli_fetch_array($res)){
                        $body=$row['body'];
                        $added_by=$row['added_by'];
                        $date_added=$row['date_added'];
                        $image=$row['image'];
                        ?>
                         <tbody>
                           <tr class="active">
                    <td><?php echo $sn;?></td>
                   <td><?php echo $added_by;?></td>
                <td><?php echo $body?></td>
                <td><img src="images/<?php echo $image?>"style="width:50px"/></td>
                <td><?php echo $date_added?></td>
              </tr>
              </tbody>

                        <?php
                        $sn++;
              }
             }
          ?>
           
             
            </tbody>
          </table>
        </div>
      </section>