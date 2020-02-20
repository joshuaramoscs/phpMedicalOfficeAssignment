<html>
 <head>
  <title>Scheduler Form</title>
  <h1>Medical Office Scheduler Form</h1>
 </head>
 <body>
   <!-- Start of Form-->
   <p>Fill out the fields below to add patient to schedule.</p>
   <form action="generateSchedule.php" method="post">
     <!-- Patient's Name-->
     <p>Patient's name: <input type="text" name="name" /></p>
     <!-- Patient's Address-->
     <p>Patient's address: <input type="text" name="address" /></p>
     <!-- Patient's Coordinate-->
     <p>Patient's coordinate:
       <select name = "coordinateX">
         <option value = "A"A</option>A
         <option value = "B"B</option>B
         <option value = "C"C</option>C
         <option value = "D"D</option>D
         <option value = "E"E</option>E
         <option value = "F"F</option>F
         <option value = "G"G</option>G
         <option value = "H"H</option>H
         <option value = "I"I</option>I
         <option value = "J"J</option>J
         <option value = "K"K</option>K
         <option value = "L"L</option>L
         <option value = "M"M</option>M
         <option value = "N"N</option>N
         <option value = "O"O</option>O
         <option value = "P"P</option>P
         <option value = "Q"Q</option>Q
         <option value = "R"R</option>R
         <option value = "S"S</option>S
         <option value = "T"T</option>T
         <option value = "U"U</option>U
         <option value = "V"V</option>V
         <option value = "W"W</option>W
         <option value = "X"X</option>X
         <option value = "Y"Y</option>Y
         <option value = "Z"Z</option>Z
       </select>
       <input type="number" name = coordinateY>
     </p>
     <!-- Start availability selection-->
     <p>Enter Patient's availability from 9 am to 6 pm.</p>
     <!-- Start availability dropdown-->
     <select name = "startHour">
       <option value = "9"9</option>9
       <option value = "10"10</option>10
       <option value = "11"11</option>11
       <option value = "12"12</option>12
       <option value = "1"1</option>1
       <option value = "2"2</option>2
       <option value = "3"3</option>3
       <option value = "4"4</option>4
       <option value = "5"5</option>5
     </select>
     :
     <select name = "startMin">
       <option value = "00"00</option>00
       <option value = "15"15</option>15
       <option value = "30"30</option>30
       <option value = "45"45</option>45
     </select>
      to
      <!-- End availability dropdown-->
     <select name = "endHour">
        <option value = "9"9</option>9
        <option value = "10"10</option>10
        <option value = "11"11</option>11
        <option value = "12"12</option>12
        <option value = "1"1</option>1
        <option value = "2"2</option>2
        <option value = "3"3</option>3
        <option value = "4"4</option>4
        <option value = "5"5</option>5
        <option value = "6"6</option>6
     </select>
     :
     <select name = "endMin">
        <option value = "00"00</option>00
        <option value = "15"15</option>15
        <option value = "30"30</option>30
        <option value = "45"45</option>45
     </select>
     <!-- New Patient checkbox-->
     <p><input type="checkbox" name="newPatient" value=true> Is this a new patient?</p>
     <!-- Submit Button-->
     <p><input type="submit" /></p>
   </form>
   <!--Save values to schedulerList.txt-->
   <?php
   $patientInfo = $_POST[name].",".$_POST[address].",".$_POST[coordinateX].",".$_POST[coordinateY].",".
   $_POST[startHour].",".$_POST[startMin].",".$_POST[endHour].",".$_POST[endMin].",".$_POST[newPatient]."\n";

   file_put_contents("schedulerList.txt", $patientInfo, FILE_APPEND);
    ?>
 </body>
</html>
