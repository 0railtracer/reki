<?php
include('connect.php');

?>

  <section id="exp" style="height: 85vh;">

    <div class="col-md-6">
      <table class="table table-hover" style="background: #636363;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Experience</th>
            <th scope="col">Date</th>
            <th scope="col">Place</th>
            <th scope="col">Remove</th>
            <th scope="col">Add</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $select_exp="SELECT * FROM `experience`";
          $result_exp=mysqli_query($con,$select_exp);

          while($rows=mysqli_fetch_assoc($result_exp)){
            $expid=$rows['expid'];
            $expname=$rows['expname'];
            $expdate=$rows['expdate'];
            $expplace=$rows['expplace'];

            echo "
            <tr>
                <th>$expid</th>
                <td>$expname</td>
                <td>$expdate</td>
                <td>$expplace</td>
                <td>
                    <button class='btn w-100 btn-danger m-1 rounded-0'><a href='deleteexp.php?expid=$rows[expid]'>Remove</a></button>
                </td>
                <td>
                    <button class='btn w-100 btn-success m-1 rounded-0'><a href='addexp.php'>Add</a></button>
                </td>
                <td>
                    <button class='btn w-100 btnsub3 m-1 rounded-0'><a href='editexp.php?expid=$rows[expid]'>Edit</a></button>
                </td>
            </tr>
            ";
          }
          ?>
            
        </tbody>
      </table>  
    </div>

  </section>
