<!DOCTYPE html>
<html>
    <head>
        <title>Patient Records Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        
        <link rel="stylesheet" href="../style.css">
        

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">User Dashboard</a>
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
                      <li><input type="text" class="search-query" placeholder="Search here" />  </li>      
                      <li><label for="mySubmit" class="btn-small"><h2><i class="fas fa-search"></h2></i></label></li>
                      <li><input id="mySubmit" type="submit" value="Go" class="hidden" /></li>
                      <li>
                        <div class="dropdown">
                            <button id ="dropdown"class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Sort
                            <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#" id="cap_id">Capacity</a></li>
                              <li><a href="#" id="hosp_id">Hospital Name</a></li>
                              <li><a href="#" id="pin_id">Pincode</a></li>
                            </ul>
                          </div>
                      </li>
                      </ul>
                  </center>
            </form>
          </div>
          <br>

          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Hospital</th>
                <th scope="col">Pincode</th>
                <th scope="col">Address</th>
                <th scope="col">Time Slots</th>
                <th scope="col">Capacity</th>
                <th scope="col">Vaccine Available</th>
              </tr>
            </thead>
            <tbody>
             <?php
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "vaccine_records";

               $con = new mysqli($servername, $username, $password, $dbname);
                if (!$con){
                  die('Could not connect: ' . mysql_error());
                 }
                
                $query ="SELECT hospital.h_id,hospital.h_name,hospital.pin,hospital.address,hospital_vacc.time_slots,hospital_vacc.capacity,vaccines.type FROM hospital JOIN hospital_vacc ON hospital.h_id=hospital_vacc.h_id JOIN vaccines ON vaccines.vac_id=hospital_vacc.vac_id;";
                $result = $con->query($query);
                while($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>" . $row['h_id'] . "</td>";
                  echo "<td>" . $row['h_name'] . "</td>";
                  echo "<td>" . $row['pin'] . "</td>";
                  echo "<td>" . $row['address'] . "</td>";
                  echo "<td>" . $row['time_slots'] . "</td>";
                  echo "<td>" . $row['capacity'] . "</td>";
                  echo "<td>" . $row['type'] . "</td>";
                  echo "</tr>";

                  }

                $con->close();?>
            </tbody>
          </table>
          <br>
          <br>
      </center>
      </body>
</html>
