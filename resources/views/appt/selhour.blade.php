<?php
$pos = array();
$x = 0;
foreach ($appts as $appt) {
$pos[$x] = $appt->pos;
$x++;	
}
$de = $_POST['d'];
echo '<table style="float:right;height:400px;"><tr><th style="padding:15px">Hour</th><th style="padding:15px">Select</th></tr>';
$hrs = ['9:00', '10:30', '12:00', '15:30', '17:00', '18:30', '20:00'];
 for ($n = 0; $n<7; $n++) {
	 $nn = $n+1;
	 if (in_array($nn, $pos)) {$clr='#FF9999';} else {$clr='#FFFFFF';}
echo "<tr><td style='padding:15px;background-color:$clr'>$hrs[$n]</td><td style='padding:15px;background-color:$clr'>";
if ($clr == '#FFFFFF') { echo "<form action='create' method='get'>";?>
@csrf
<?php
$hr = "$hrs[$n]";
$posel = array_search($hr, $hrs);
$posel++;
echo "<input type='hidden' name='data2' value='$de'></input>
<input type='hidden' name='pos2' value='$posel'><input type='hidden' name='hr' value='$hrs[$n]'></input><input type='submit' value='pick hour'></input></form>";
}
echo "</td></tr>";	 
 }
 echo '</table>';

 ?>
 