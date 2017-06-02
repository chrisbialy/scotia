<script language="javascript">

function myFunction() {
    window.print();
}

</script>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="css/print.css" rel="stylesheet" type="text/css" />
<div id="content" class="clearfix">
					<h2>All Bookings</h2>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">Book Ref.  </th>
								<th> Fname </th>
								<th> Lname </th>
								<th> Address </th>
								<th> Contact </th>
								<th> Cruise </th>
								<th> Boat Type </th>
								<th> Price </th>
								<th> Time </th>
								<th> Date </th>
								<th> Trans. </th>
								<th> Seats Res. </th>
								<th> Payable </th>
								<th> Status </th>
							
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$id=$_GET['id'];
							$result = mysql_query("SELECT * FROM booking_customer");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['id'].'</td>';
									echo '<td><div align="right">'.$row['fname'].'</div></td>';
									echo '<td><div align="right">'.$row['lname'].'</div></td>';
									echo '<td><div align="right">'.$row['address'].'</div></td>';
									echo '<td><div align="right">'.$row['contact'].'</div></td>';
									$rrad=$row['boat'];
									$dddd=$row['transactionum'];
									$results = mysql_query("SELECT * FROM cruise WHERE id='$rrad'");
									while($rows = mysql_fetch_array($results))
										{
									echo '<td><div align="right">'.$rows['cruise'].'</div></td>';
									echo '<td><div align="right">'.$rows['type'].'</div></td>';
									echo '<td><div align="right">'.$rows['price'].'</div></td>';
									echo '<td><div align="right">'.$rows['time'].'</div></td>';
										}
									$resulta = mysql_query("SELECT * FROM reserve WHERE transactionnum='$dddd'");
									while($rowa = mysql_fetch_array($resulta))
										{
									echo '<td><div align="right">'.$rowa['date'].'</div></td>';
									echo '<td><div align="right">'.$rowa['transactionnum'].'</div></td>';
									echo '<td><div align="right">'.$rowa['seat_reserve'].'</div></td>';
										}
									
									echo '<td><div align="right">'.$row['payable'].'</div></td>';
									echo '<td><div align="right">'.$row['status'].'</div></td>';
									echo '</tr>';
								}
							?> 
					</tbody>
					</table>
					<button class="hide-from-printer" onclick="myFunction()">Print</button>


				</div>