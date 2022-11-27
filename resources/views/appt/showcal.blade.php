<?php 
 // This gets today's date 
 $date =time () ; 
 // This puts the day, month, and year in seperate variables 
 $day = date('d', $date) ; 
 $i = 0;
 
 if (isset($_POST['i'])) {
 $i = $_POST['i'];
 $x = 'first day of +'.$i.' month';
 $month = date("m",strtotime($x));
 $year = date('Y', strtotime($x)) ;
  }
else {	 $month = date('m', $date) ;
$year = date('Y', $date) ;  
}
$red=array();
 $z = 0;
 foreach ($appts as $appt) {
$darr=explode('-', $appt->data);
if (($darr[0] == $year) && ($darr[1] == $month)) $red[$z] = $darr[2];
$z++;
}
 // Here we generate the first day of the month 
 function showc($month, $day, $year, $red) {
 $first_day = mktime(0,0,0,$month, 1, $year) ; 

 // This gets us the month name 
 $title = date('F', $first_day);
 
 //Here we find out what day of the week the first day of the month falls on 
 $day_of_week = date('D', $first_day) ; 

 /*Once we know what day of the week it falls on, we know how many
   blank days occure before it. If the first day of the week is a 
  Sunday then it would be zero*/

 switch($day_of_week){ 
     case "Sun": $blank = 0; break; 
     case "Mon": $blank = 1; break; 
     case "Tue": $blank = 2; break; 
     case "Wed": $blank = 3; break; 
     case "Thu": $blank = 4; break; 
     case "Fri": $blank = 5; break; 
     case "Sat": $blank = 6; break; 
 }

 //We then determine how many days are in the current month
 $days_in_month = cal_days_in_month(0, $month, $year) ; 
 echo "<table style='border:1px; width:294px;height:400px;'>";
 echo "<tr><th colspan=7> $title $year <button type='button' onclick='nextm()' style='float:right'>Next month</button></th></tr>";
 echo "<tr><td style='width:42px;text-align: center;'>S</td><td style='width:42px;text-align: center;'>M</td><td 
     style='width:42px;text-align: center;'>T</td><td style='width:42px;text-align: center;'>W</td><td style='width:42px;text-align: center;'>T</td><td 
     style='width:42px;text-align: center;'>F</td><td style='width:42px;text-align: center;'>S</td></tr>";

 //This counts the days in the week, up to 7
 $day_count = 1;

 echo "<tr>";
 //first we take care of those blank days
 while ( $blank > 0 ) 
 { 
     echo "<td></td>"; 
     $blank = $blank-1; 
     $day_count++;
 }


//sets the first day of the month to 1 
 $day_num = 1;
 while ( $day_num <= $days_in_month ) 
 { 
    //change color
if (count(array_keys($red, $day_num)) == 7 || $day_count ==1 || $day_count == 7) {$color='#FF9999'; $selh = 'clr()';} else {$color='#FFFFFF';$selh = "selh('$year-$month-$day_num')";}
//end change color
     echo "<td style='background-color:$color;text-align: center;'><span onclick=$selh style='cursor:pointer'> $day_num</span> </td>"; 
     $day_num++; 
     $day_count++;

     //Make sure we start a new row every week
     if ($day_count > 7)
     {
         echo "</tr><tr>";
         $day_count = 1;
     }
 }

 $day_num = 1; 
 while ( $day_count >1 && $day_count <=7 )
 {
   
	echo "<td>  </td>";
     $day_num++;
	 $day_count++;
 }

 echo "</tr></table>";
 }
 showc($month, $day, $year, $red);
 ?>