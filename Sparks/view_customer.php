<?php

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>

<html>
<head>
	<title>
   Customer Details
	</title>
	<!-- <link rel = "stylesheet" type = "text/css" href = "style.css"> -->
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h2{
		font-family: gabriola;
		font-size:40px;
		}

		td, th {
		border: 1px solid #ffb037;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color:#ffe268;
		}
	</style>
</head>


<body style="background-color:#dbf6e9">

<link rel = "stylesheet" type = "text/css" href = "navbutton.css">
	<nav class = "navbar">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href = "view_customer.php">View all Customers</a></li>
		<li><a href = "transfer_money.php">Transfer Money</a></li>
		<li><a href = "transaction_history.php">View transaction History</a></li>
	</ul>
	</nav>

	</div>

<br>
    <h1 align=center font-family=gabriola>Details of Customer</h1>
    <table class="flat-table flat-table-1" align=center>
		<thead>
			<th>CUSTOMER ID</th>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>CURRENT BALANCE</th>
		</thead>
		<tbody>
		<tr align = center>

			<?php
				while($row=mysqli_fetch_array($result)){
			?>

			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
		<tr align = center>
	<?php }
	?>
		</tr>


		</tbody>
	</table>
	<br><br>
</body>
</html>
