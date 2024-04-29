<?php
include('connect.php');

?>

  <section id="skills" style="height: 85vh;">

    <div class="col-md-6">
      <table class="table table-hover" style="background: #636363;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Skill</th>
            <th scope="col">%</th>
            <th scope="col">Remove</th>
            <th scope="col">Add</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $select_s="SELECT * FROM `skills`";
          $result_s=mysqli_query($con,$select_s);

          while($rows=mysqli_fetch_assoc($result_s)){
            $skid=$rows['skid'];
            $sname=$rows['sname'];
            $sper=$rows['sper'];

            echo "
            <tr>
                <th>$skid</th>
                <td>$sname</td>
                <td>$sper</td>
                <td>
                    <button class='btn w-100 btn-danger m-1 rounded-0'><a href='deleteski.php?skid=$rows[skid]'>Remove</a></button>
                </td>
                <td>
                    <button class='btn w-100 btn-success m-1 rounded-0'><a href='addski.php'>Add</a></button>
                </td>
                <td>
                    <button class='btn w-100 btnsub3 m-1 rounded-0'><a href='editski.php?skid=$rows[skid]'>Edit</a></button>
                </td>
            </tr>
            ";
          }
          ?>
            
        </tbody>
      </table>  
    </div>

  </section>
