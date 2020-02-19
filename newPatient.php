<html>
 <head>
  <title>New Patient</title>
  <h1>New Patient Form</h1>
 </head>
 <body>
   <p>Fill out the fields below to add patient to database.</p>
   <form action="loading.php" method="post">
     <p>Patient's address: <input type="text" name="address" /></p>
     <p>Patient's rough coordinate: <input type="text" name="coordinate" /></p>
     <p><input type="submit" /></p>
   </form>
   <?php

   $newPatientInfo = $_POST[address]."_".$_POST[coordinate];

    ?>
 </body>
</html>
