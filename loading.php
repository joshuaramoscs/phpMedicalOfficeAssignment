include 'scheduler.php';
include 'newPatient.php';
<html>
 <head>
  <title>Loading</title>
  <h1>Medical Office Scheduler Form</h1>
 </head>
 <body>
   <p>Loading...</p>
   <?php
   echo "Loading...";

   file_put_contents("schedulerList.txt", $patientInfo, FILE_APPEND);
   file_put_contents("patientsDatabase.txt", $patientInfo.$newPatientInfo, FILE_APPEND);

   sleep(1);
   header('Location: scheduler.php');

   if(array_key_exists('newPatient', $_POST)) {
     header('Location: newPatient.php');
   }
   ?>
 </body>
</html>
