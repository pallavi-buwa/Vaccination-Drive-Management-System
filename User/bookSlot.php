<!DOCTYPE html>
<html>
    <head>
        <title>Patient Records Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="style.css">

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="./user_dashboard.php">User Dashboard</a>
          </div>
          <ul class="nav navbar-nav">
              <li ><a href="./user_dashboard.php">Home</a></li>
              <li><a href="./userRecords.php">User Information</a></li>
              <li class="active"><a href="./bookSlot.php">Book A slot</a></li>
              <li><a href="./userFaqs.php">FAQs</a></li>
              <li><a href="./certificate.php">Print Certificate</a></li>
          </ul>
        </div>
      </nav>

      <center>
          <br>
          <br>
          <br>
          <img src="./vacc.jpg" alt="alt text">
          <br>
          <br>

          <br>
          <div class="contain">
            <form class="navbar-search">
                <center>
                    <ul class="nav navbar-nav">
                       <form action=""  method="POST">
                        <input type="text" name="search">
                        <input type="submit" name="submit">
                        </form>

                      </ul>
                  </center>
            </form>
          </div>
          <br>

          <table class="table table-hover">
            <thead>
              <tr>
                  <th scope="col"><a href="?sort=id">ID<i class="fa fa-sort" style="font-size:15px"></i></a></th>
                  <th scope="col"><a href="?sort=hospital">Hospital<i class="fa fa-sort" style="font-size:15px"></i></a></th>
                  <th scope="col"><a href="?sort=address">Address<i class="fa fa-sort" style="font-size:15px"></i></a></th>
                  <th scope="col"><a href="?sort=time">Time Slots<i class="fa fa-sort" style="font-size:15px"></i></a></th>
                  <th scope="col"><a href="?sort=capacity">Capacity<i class="fa fa-sort" style="font-size:15px"></i></a></th>
                  <th scope="col"><a href="?sort=av">Vaccine Available<i class="fa fa-sort" style="font-size:15px"></i></a></th>
              </tr>
            </thead>
            <tbody>
            <?php
               $servern = "localhost";
               $usern = "root";
               $passw = "";
               $dbn = "vaccinations";
               $con=new mysqli($servern,$usern,$passw,$dbn);
               $search_value=filter_input(INPUT_GET, 'search');
                        
            if (filter_input(INPUT_GET, 'sort') == 'id')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY hospital.h_id";
                $res = $con->query($sql1);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            
            }
            elseif (filter_input(INPUT_GET, 'sort') == 'address')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY hospital.address";
                $res = $con->query($sql1);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            
            }
            elseif (filter_input(INPUT_GET, 'sort') == 'hospital')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY hospital.h_name";
                $res = $con->query($sql1);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            
            }
            elseif (filter_input(INPUT_GET, 'sort') == 'time')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY hospital_vacc.time_slots";
                $res = $con->query($sql1);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            
            }
             elseif (filter_input(INPUT_GET, 'sort') == 'capacity')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY hospital_vacc.capacity";
                $res = $con->query($sql1);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            
            }
            elseif (filter_input(INPUT_GET, 'sort') == 'av')
            {
                $sql1 = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id ORDER BY vaccines.type";
                $res = $con->query($sql1);
                while($row = $res->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['h_id'] . "</td>";
                echo "<td>" . $row['h_name'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['time_slots'] . "</td>";
                echo "<td>" . $row['capacity'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "</tr>";
            }
            
            }
            else{
              $sql = "SELECT hospital.h_id,hospital.h_name,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id where hospital.h_name like '%$search_value%' or hospital.address like '%$search_value%' or hospital_vacc.time_slots like '%$search_value%' or hospital_vacc.capacity like '%$search_value%' or vaccines.type like '%$search_value%';";
              $res= $con->query($sql) or die($con->error);
              while($row = $res->fetch_assoc()) {
              echo "<tr>";
              echo "<td>" . $row['h_id'] . "</td>";
              echo "<td>" . $row['h_name'] . "</td>";
              echo "<td>" . $row['address'] . "</td>";
              echo "<td>" . $row['time_slots'] . "</td>";
              echo "<td>" . $row['capacity'] . "</td>";
              echo "<td>" . $row['type'] . "</td>";
              echo "</tr>";

                  }


                }
                     $con->close();
                    ?>
            </tbody>
          </table>
          <br>
          <br>
      </center>
      </body>
</html>
