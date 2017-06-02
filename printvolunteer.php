<script language="javascript">

function myFunction() {
    window.print();
}

</script>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="css/print.css" rel="stylesheet" type="text/css" />
<div id="content" class="clearfix">
					<h2>Volunteers</h2>
<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7">User ID</th>
								<th> Username </th>
								<th> Firstname </th>
								<th> Surname </th>
								<th> Date of Birth </th>
								<th> Email </th>
								<th> Usertype </th>
								
							</tr>
						</thead>
						<tbody>
						<?php
							include('db.php');
							$result = mysql_query("SELECT * FROM customer");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['userid'].'</td>';
									echo '<td><div align="right">'.$row['username'].'</div></td>';
									echo '<td><div align="right">'.$row['firstname'].'</div></td>';
									echo '<td><div align="right">'.$row['surname'].'</div></td>';
									echo '<td><div align="right">'.$row['dob'].'</div></td>';
									echo '<td><div align="right">'.$row['emailadd'].'</div></td>';
									echo '<td><div align="right">'.$row['usertype'].'</div></td>';
									
								}
							?> 
						</tbody>
					</table>
						<button class="hide-from-printer" onclick="myFunction()">Print</button>


				</div>