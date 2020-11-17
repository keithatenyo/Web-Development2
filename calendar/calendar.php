<!DOCTYPE html>
<html>
<head>
<title>Calendar</title> 

<link rel="stylesheet" type="text/css" href="calendar.css" />

</head>
<body>

<div class="container">
<h1>
<?php 
$timestamp = time();

date_default_timezone_set('Africa/Nairobi');

$weekday = date("D",$timestamp);
$month = date("F",$timestamp);
$day = date("d",$timestamp);
$year = date("Y",$timestamp);
$hour = date("h",$timestamp);
$minute = date("i",$timestamp);
$ampm = date("a", $timestamp);
 
echo ("Keith's Family Schedule for " . $weekday . ", " . $month . $day . ", " . $year . ", " . $hour . ":" . $minute);
echo "</br>";
echo date("a");
function get_hour_string($timestamp)
{
return date("g",$timestamp) . ".00" . date("a", $timestamp);
}

?>
</h1>
<table id="event_table">


	<tr> 
		<th class='hr_td'> &nbsp; </th> <th class='table_header'>Ephy</th><th class='table_header'>Alex</th><th class='table_header'>Fred</th> 
	</tr> 
<tr class='even_row'> 
<td class='hr_td'>10.00pm</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>11.00pm</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>12.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>1.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>2.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>3.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>4.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>5.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>6.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>7.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>8.00am</td> <td> </td> <td> </td> <td></td>
</tr><tr class='odd_row'>
<td class='hr_td'>9.00am</td> <td> </td> <td> </td> <td> </td>
</tr><tr class='even_row'> 
<td class='hr_td'>10.00am</td> <td> </td> <td> </td> <td></td>
</tr>	
	
</table>

</div>
</body>
</html>

