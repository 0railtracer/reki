<?php
include('connect.php');

?>

  <section id="about" style="height: 85vh;">

    <div class="col-md-6">
      
      <table class="table table-hover" style="background: #636363;">
        <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Image</th>
            <th scope="col">CV</th>
            <th scope="col">Edit</th>
        </tr>
        </thead>
        <tbody>
          <?php
      $select_abt="SELECT * FROM `about`";
      $result_abt=mysqli_query($con,$select_abt);

      while($rows=mysqli_fetch_assoc($result_abt)){
        $abid=$rows['abid'];
        $aname=$rows['aname'];
        $arole=$rows['arole'];
        $img=$rows['img'];
        $cv=$rows['cv'];

        echo "
            <tr>
                <th>$aname</th>
                <td>$arole</td>
                <td>$img</td>
                <td>$cv</td>
                <td>
                    <button class='btn w-100 btnsub3'><a href='editabout.php?abid=$rows[abid]'>Edit</a></button>
                </td>
            </tr>
        ";
      }
      ?>
            
        </tbody>
      </table>  
    </div>

  </section>
  
