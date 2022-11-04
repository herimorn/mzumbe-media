<?php include("partials/sidebar.php");?>
<section class="attendance" style="position:relative;left:10%">
        <div class="attendance-list" style="width:100%">
          <h1>all leaders</h1>
          <table class="table">
            <thead>
              <tr>
                <th>ID</th>
                <th>leader name</th>
                <th>email</th>
              </tr>
            </thead>
            <?php
            $sql="SELECT * FROM users where  users.user_role='muso'";
           $res=mysqli_query($conn,$sql);
             if($res){
              $sn=1;
              while($row=mysqli_fetch_array($res)){
                        $username=$row['username'];
                        $email=$row['email'];
                        ?>
                         <tbody>
                           <tr class="active">
                    <td><?php echo $sn;?></td>
                   <td><?php echo $username;?></td>
                   <td><?php echo $email;?></td>
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