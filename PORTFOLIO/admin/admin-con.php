<?php
include('connect.php');

?>

  <section id="con" style="height: 85vh;">

    <div class="col-md-6">
      <table class="table table-hover" style="background: #636363;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Email</th>
            <th scope="col">Remove</th>
            <th scope="col">Add</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $select_con="SELECT * FROM `contact`";
          $result_con=mysqli_query($con,$select_con);

          while($rows=mysqli_fetch_assoc($result_con)){
            $conid=$rows['conid'];
            $conadd=$rows['conadd'];

            echo"
            <tr>
                <th>$conid</th>
                <td>$conadd</td>
                <td>
                    <button class='btn w-100 btn-danger m-1 rounded-0'><a href='deletecon.php?conid=$rows[conid]'>Remove</a></button>
                </td>
                <td>
                    <button class='btn w-100 btn-success m-1 rounded-0'><a href='addcon.php'>Add</a></button>
                </td>
                <td>
                    <button class='btn w-100 btnsub3 m-1 rounded-0'><a href='editcon.php?conid=$rows[conid]'>Edit</a></button>
                </td>
            </tr>
            ";
          }
          ?>
            
        </tbody>
      </table>  
    </div>

  </section>
