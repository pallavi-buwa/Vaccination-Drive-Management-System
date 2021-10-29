<!DOCTYPE html>
<html>
    <head>
        <title>Patient Records Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="../style.css">

    </head>
    <body>
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">User Dashboard</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="./user_dashboard.php">Home</a></li>
            <li class="active"><a href="./userRecords.php">User Information</a></li>
            <li><a href="./bookSlot.php">Book A slot</a></li>
            <li><a href="./userFaqs.php">FAQs</a></li>
            <li><a href="./certificate.php">Print Certificate</a></li>
          </ul>
        </div>
      </nav>
      <br>
      <br>
      <br>
      <center>
          <h3>User Information</h3>
      <img src="./file.png">
    </center>
    
      <br>
      <br>
      <center>
      <div class="contain-form">
        <form>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Email</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Email Id">
                  </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Name</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Name">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Dose 1 Status</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
              <div class="form-group col-md-6">
                <label for="inputZip">Dose 2 Status</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <button type="submit" class="edit">Edit Information</button>
          </form>
          <br>
          <br>
      </div>
    </center>
    <br>
      </body>
</html>
