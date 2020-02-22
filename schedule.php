<html>
 <head>
  <title>Schedule Page</title>
  <h1>Medical Office Scheduler</h1>
  <p>
    <form action="scheduler.html">
      <input type="submit" value="Add More Patients" />
    </form>
  </p>
 </head>
 <body>
   <p style='color: blue'>Columns might be unaligned, but the respective values match the table header.</p>

   <?php
   session_start();
   if(isset($_SESSION['patientArray'])){
     //Schedule
     echo "<h3><u>Schedule:</u></h3><p><strong>Appointment #
      &emsp;&emsp;Name&emsp;&emsp;&emsp;Address&emsp;&emsp;&emsp;
      Coordinate&emsp;&emsp;&emsp;Start Time&emsp;&emsp;&emsp;End Time
      &emsp;&emsp;&emsp;New Patient</strong></p>";
     for ($i = 0; $i < count($_SESSION['patientArray']); $i++) {
        echo "&emsp;&emsp;&emsp;".$i."&emsp;&emsp;&emsp;&emsp;&emsp;".
         $_SESSION['patientArray'][$i][0]."&emsp;&emsp;&emsp;".
         $_SESSION['patientArray'][$i][1]."&emsp;&emsp;&emsp;&emsp;&emsp;".
         $_SESSION['patientArray'][$i][2].$_SESSION['patientArray'][$i][3].
         "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
         $_SESSION['patientArray'][$i][4].":".$_SESSION['patientArray'][$i][5].
         "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
         $_SESSION['patientArray'][$i][6].":".$_SESSION['patientArray'][$i][7].
         "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
         $_SESSION['patientArray'][$i][8];

        echo "<br><br>";
     }

     //Patients' desired Schedule
     $pq = new SplPriorityQueue(); //Priority Queue used for optimisation.
     $priority = null; //Priority value
     $count = 0; //used to display Appointment #
     echo "<h3><u>Patients' Desired Schedule:</u></h3><p><strong>Appointment #
      &emsp;&emsp;Name&emsp;&emsp;&emsp;Address&emsp;&emsp;&emsp;
      Coordinate&emsp;&emsp;&emsp;Start Time&emsp;&emsp;&emsp;End Time
      &emsp;&emsp;&emsp;New Patient</strong></p>";
      //Add elements to Priority Queue
     for ($i = 0; $i < count($_SESSION['patientArray']); $i++) {
       $priority = $_SESSION['patientArray'][$i][4].":".$_SESSION['patientArray'][$i][5];
       echo $priority, "<br>";
       $pq->insert($_SESSION['patientArray'][$i], $priority);
      }
      //Print optimized schedule
      while ($pq->valid()) {
        echo "&emsp;&emsp;&emsp;".$count."&emsp;&emsp;&emsp;&emsp;&emsp;".
         $pq->current()[0]."&emsp;&emsp;&emsp;".
         $pq->current()[1]."&emsp;&emsp;&emsp;&emsp;&emsp;".
         $pq->current()[2].$pq->current()[3].
         "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
         $pq->current()[4].":".$pq->current()[5].
         "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
         $pq->current()[6].":".$pq->current()[7].
         "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
         $pq->current()[8];
         echo "<br><br>", PHP_EOL;
         $pq->next();
         $count++;
      }

      //Optimized Time Schedule
      $pq = new SplPriorityQueue(); //Priority Queue used for optimisation.
      $priority = null; //Priority value
      $count = 0; //used to display Appointment #
      $currentPositionX = "A";
      $currentPositionY = "0";
      $driveTime = 0;
      $closestTime = 60; //Max possible time is 50.16
      $closestPatient = array();
      echo "<h3><u>Optimized Time Schedule:</u></h3><p><strong>Appointment #
       &emsp;&emsp;Name&emsp;&emsp;&emsp;Address&emsp;&emsp;&emsp;
       Coordinate&emsp;&emsp;&emsp;Start Time&emsp;&emsp;&emsp;End Time
       &emsp;&emsp;&emsp;New Patient</strong></p>";
       //Add elements to Priority Queue
      for ($i = 0; $i < count($_SESSION['patientArray']); $i++) {
        $driveTime = round(2*(sqrt(pow(ord($_SESSION['patientArray'][$i][2])-ord($currentPositionX), 2)+
          pow(ord($_SESSION['patientArray'][$i][3])-ord($currentPositionY), 2))), 2); // calculate distance * 2mins to get time
        echo $driveTime, "<br>";
        $priority = $driveTime;
        $pq->insert($_SESSION['patientArray'][$i], $priority);
       }
       //Print optimized schedule
       while ($pq->valid()) {
         echo "&emsp;&emsp;&emsp;".$count."&emsp;&emsp;&emsp;&emsp;&emsp;".
          $pq->current()[0]."&emsp;&emsp;&emsp;".
          $pq->current()[1]."&emsp;&emsp;&emsp;&emsp;&emsp;".
          $pq->current()[2].$pq->current()[3].
          "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
          $pq->current()[4].":".$pq->current()[5].
          "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
          $pq->current()[6].":".$pq->current()[7].
          "&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;".
          $pq->current()[8];
          echo "<br><br>", PHP_EOL;
          $pq->next();
          $count++;
       }

     //print_r(array_values($_SESSION['patientArray']));
   } else {
     echo "No patient is in the schedule.";
   }
    ?>
  <p><br>
    <form action="deleteSchedule.php">
     <input style='color: red' type="submit" value="Delete Entire Schedule" />
    </form>
  </p>
 </body>
</html>
