<?php
include('connect.php');

?>

  <section id="edu" style="height: 85vh;">

    <div class="col-md-6">
      <table class="table table-hover" style="background: #636363;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">School</th>
            <th scope="col">Date</th>
            <th scope="col">Place</th>
            <th scope="col">Grade</th>
            <th scope="col">Remove</th>
            <th scope="col">Add</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $select_edu="SELECT * FROM `education`";
          $result_edu=mysqli_query($con,$select_edu);
          
          while($rows=mysqli_fetch_assoc($result_edu)){
            $eduid=$rows['eduid'];
            $eduname=$rows['eduname'];
            $edudate=$rows['edudate'];
            $eduplace=$rows['eduplace'];
            $edug=$rows['edug'];
            
            echo "
            <tr>
                <th>$eduid</th>
                <td>$eduname</td>
                <td>$edudate</td>
                <td>$eduplace</td>
                <td>$edug</td>
                <td>
                    <button class='btn w-100 btn-danger m-1 rounded-0'><a href='deleteedu.php?eduid=$rows[eduid]'>Remove</a></button>
                </td>
                <td>
                    <button class='btn w-100 btn-success m-1 rounded-0'><a href='addedu.php'>Add</a></button>
                </td>
                <td>
                    <button class='btn w-100 btnsub3 m-1 rounded-0'><a href='editedu.php?eduid=$rows[eduid]'>Edit</a></button>
                </td>
            </tr>
            ";
          }
          ?>
            
        </tbody>
      </table>  
    </div>

  </section>
