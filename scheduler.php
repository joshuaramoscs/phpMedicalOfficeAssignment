<html>
 <head>
  <title>Loading</title>
  <h1>Medical Office Scheduler Form</h1>
 </head>
 <body>
   <!--Save values to schedulerList.txt-->
   <?php
   $patientInfo = $_POST['name'].",".$_POST['address'].",".$_POST['coordinateX'].",".$_POST['coordinateY'].",".
   $_POST['startHour'].",".$_POST['startMin'].",".$_POST['endHour'].",".$_POST['endMin'].",".$_POST['newPatient'].","."\n";
   file_put_contents("schedulerList.txt", $patientInfo, FILE_APPEND);
   header('Location: scheduler.html');
    ?>
 </body>
</html>
