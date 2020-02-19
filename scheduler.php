<html>
 <head>
  <title>Scheduler Form</title>
  <h1>Medical Office Scheduler Form</h1>
 </head>
 <body>

   <p>Fill out the fields below to add patient to schedule.</p>
   <form action="loading.php" method="post">
     <p>Patient's First name: <input type="text" name="firstName" /></p>
     <p>Patient's Last name: <input type="text" name="lastName" /></p>
     <p>Patient's time constraints: <input type="text" name="timeConstraints" /></p>
     <input type="checkbox" name="newPatient" value=true> Is this a new patient?
     <p><input type="submit" /></p>
   </form>
   <?php
   
   $patientInfo = $_POST[firstName]." ".$_POST[lastName]._.$_POST[timeConstraints];

   if(array_key_exists('newPatient', $_POST)) {
     header('Location: newPatient.php');
   }

    ?>
 </body>
</html>
