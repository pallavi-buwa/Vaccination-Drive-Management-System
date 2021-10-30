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
              <li class="active"><a href="./user_dashboard.php">Home</a></li>
              <li><a href="./userRecords.php">User Information</a></li>
            <li><a href="./bookSlot.php">Book A slot</a></li>
            <li><a href="./userFaqs.php">FAQs</a></li>
            <li><a href="./certificate.php">Print Certificate</a></li>
          </ul>
        </div>
      </nav>
    <div class = "bg-image-user">
       <img src="vaccine.jpg" id="vaccine">
       <div class = "text">
         <br>
         <br>
         <br>

         <center><h3>Welcome to the Vaccination Drive Managment System</h3></center>
         <br>
         <div class="info">
           <center>
         <p>
          India began administration of COVID-19 vaccines on 16 January 2021. As of 17 October 2021, 
          India has administered over 977 million doses overall, including first and second doses of the currently-approved 
          vaccines.In India, nearly half the eligible population has got at least one shot, and 19 per cent 
          received both nine months after the vaccine rollout.
          </p>
          <br>
         <p>
          India initially approved the Oxford–AstraZeneca vaccine (manufactured under license by Serum Institute of India
           under the trade name Covishield) and Covaxin (a vaccine developed locally by Bharat Biotech). They have since been 
           joined by the Sputnik V (manufactured under license by Dr. Reddy's Laboratories, with additional production from 
           Serum Institute of India being started in September), Moderna vaccines, 
          Johnson & Johnson vaccine and ZyCoV-D (a vaccine locally developed by Zydus Cadila) and other vaccine
         </p>
         <br>
         <br>
         <p><center><strong>Graph of cumulative doses administered across the country</strong></center></p>

         <img src="./graph.png">
         <br>
         <br>
         <p><center><strong>States by Vaccine Coverage</strong></center></p>
         <img src="./graph2.png">
        </center>
         </div>
       </div>
    </div>
    
    </body>
     
</html>