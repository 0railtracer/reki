<?php
include('connect.php');

?>

  <section id="pf" style="height: 85vh;">

    <div class="col-md-6">
      <table class="table table-hover" style="background: #636363;">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Image/Video</th>
            <th scope="col">Name</th>
            <th scope="col">Remove</th>
            <th scope="col">Add</th>
        </tr>
        </thead>
        <tbody>
          <?php
          $select_pf="SELECT * FROM `portfolio`";
          $result_pf=mysqli_query($con,$select_pf);

          while($rows=mysqli_fetch_assoc($result_pf)){
            $pid=$rows['pid'];
            $pname=$rows['pname'];
            $pimg=$rows['pimg'];

            echo "
            <tr>
                <th>$pid</th>
                <td>$pimg</td>
                <td>$pname</td>
                <td>
                    <button class='btn w-100 btn-danger m-1 rounded-0'><a href='deletepf.php?pid=$rows[pid]'>Remove</a></button>
                </td>
                <td>
                    <button class='btn w-100 btn-success m-1 rounded-0'><a href='addpf.php'>Add</a></button>
                </td>
            </tr>
            ";
          }
          ?>
            
        </tbody>
      </table>  
    </div>

  </section>
