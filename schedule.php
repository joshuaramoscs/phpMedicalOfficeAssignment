<html>
 <head>
  <title>Loading</title>
  <h1>This is your schedule</h1>
 </head>
 <body>
   <?php
   $myfile = fopen("schedulerList.txt", "r") or die("Unable to open file!");
   $infoArray = explode(",", $myfile);

   for($i = 0; $i < $infoArray; $i++){
     echo $infoArray[$i], "\n";
     $i++;
   }
   echo "Hello";
   echo fread($myfile,filesize("schedulerList.txt"));
   fclose($myfile);
    ?>
 </body>
</html>
