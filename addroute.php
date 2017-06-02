
<script type="text/javascript">
function validateForm()
{
var a=document.forms["addroom"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Bus type");
  return false;
  }
var b=document.forms["addroom"]["cruise"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Cruise");
  return false;
  }
 var c=document.forms["addroom"]["seat"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the Seat Number");
  return false;
  }
var d=document.forms["addroom"]["price"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the Price");
  return false;
  }
}
</script>

<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>

<form action="addexec.php" method="post">
	Boat Type:<br><input type="text" required name="type" class="ed"><br>
	Cruise:<br><input type="text" required name="cruise" class="ed"><br>
	Price:<br><input type="number" required min="0" max="10000" size="5" name="price" class="ed"><br>
	Seat Number:<br><input type="number" required name="seat" min="0" max="50" class="ed"><br>
	Time:<br><input type="text" name="time" required class="ed" placeholder="10:30am"><br>
	<input type="submit" value="Save" id="button1">
</form>
