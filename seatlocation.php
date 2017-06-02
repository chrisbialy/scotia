<?php
include('db.php');
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM cruise WHERE id='$id'");
while($row = mysql_fetch_array($result))
	{
	$seatnum=$row['numseats'];
	}
?>
Boat Seat Layout <br>
<div style="border:1px solid red; padding:10px 5px; border-radius:5px; width: 136px;">
<?php
$N = $seatnum+1;
for($i=1; $i < $N; $i++)
{
echo '<input type="button" style="border:none; width:23px; padding:2px; margin:2px;" value="'.$i.'" />';
}
?>
</div>