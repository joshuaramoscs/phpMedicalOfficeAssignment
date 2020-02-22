<html>
 <head>
  <title>Loading</title>
  <h1>Medical Office Scheduler Form</h1>
 </head>
 <body>
   <form action="scheduler.html">
    <input type="submit" value="Go Back" />
   </form>

   <!--Save values to schedulerList.txt-->
   <?php
   session_start();
   if($_POST['newPatient'] == NULL) {
     $_POST['newPatient'] = "no";
   }
   //Save patient in to session array
   $patientInfoArray = array($_POST['name'], $_POST['address'], $_POST['coordinateX'], $_POST['coordinateY'],
    $_POST['startHour'], $_POST['startMin'], $_POST['endHour'], $_POST['endMin'], $_POST['newPatient'], 60);

   if($_SESSION['patientArray'] == NULL) {
     echo "if 1\n";
     $_SESSION['patientArray'] = array(0 => $patientInfoArray);
   } else {
       array_push($_SESSION['patientArray'], $patientInfoArray);
   }
   header('Location: scheduler.html');
    ?>
 </body>
</html>
