<html>
 <head>
  <title>Loading</title>
  <h1>This is your schedule</h1>
 </head>
 <body>
   <?php
   session_start();
   $_SESSION = array();
   header('Location: scheduler.html');
    ?>
 </body>
</html>
