 <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!--logo css-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
        <!-- customize CSS-->
          <link href = "CSS/home.css" rel="stylesheet" type="text/css"/>
           <link href = "CSS/calender.css" rel="stylesheet" type="text/css"/>
        
        <title>Charity Helping People</title>
      </head>
      <body>
          <div class = "container-fluid sticky-top menubar">
      <div class="container">
          <div class = "row menubar-row-1">
              <div class = "col-lg-10 offset-lg-2 col-md-12 col-sm-12">
              <nav class="navbar navbar-expand-lg navbar-expand-md navbar-light bg-light">
           
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
              <ul class="navbar-nav navbar-right">
                  
              <li class="nav-item">
                <a class="nav-link" href="home.html">Home</a>
              </li>
                  
              <li class="nav-item">
                <a class="nav-link" href="calender.html">Calendar</a>
              </li>
                  
              <li class="nav-item">
                <a class="nav-link" href="courses.html">Courses</a>
              </li>
                  
              <li class="nav-item">
                <a class="nav-link" href="result.html">Result</a>
              </li>
                  
              <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
              </li>
                  
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
                  
              </ul>
              </div>
              </nav></div>
          </div>
      </div>
    </div>
<!--menubar html end-->

<?php

// connecting to the database
$con = mysqli_connect("localhost","root","","calender");


// create and execute query

$sql = "SELECT * FROM calender";
$res = mysqli_query($con, $sql);



if(mysqli_num_rows($res)>0)
  
  {
   echo '<table width=75% align="center" cellpadding=10 cellspacing=0 border=1 >';

   echo '<tr><td bgcolor="ForestGreen"><b>SL No.</b></td><td bgcolor="ForestGreen"><b>Date</b></td><td bgcolor="ForestGreen"><b>Description</b></td></tr>';

   while( $row = mysqli_fetch_row($res) )
     {

   echo '<tr>';
   
   echo '<td bgcolor="LightGray">' . $row[0] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[1] .'</td>';
   echo '<td bgcolor="LightGray">' . $row[2] .'</td>';

   echo'</tr>';

     }

   echo '</table>'; 
 }
else

 {

  echo 'NO records found!';

 }


mysqli_free_result($res);

mysqli_close($con);  // logout from db
?> 

  </body>
          
</html>