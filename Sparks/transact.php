<?php
	session_start();
	include 'connection.php';

	if(isset($_GET['Name'])){
		$Name=$_GET['Name'];
	}

	$q="select * from customers where Name='$Name'";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
	$_SESSION['Name']=$Name;
?>

<html>
<head>
	<title>transact</title>
	<link rel = "stylesheet" type = "text/css" href = "navbutton.css">
	<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		h1{
		font-family: Timesnewroman, Serif;
		font-size:40px;
		}

		td, th {
		border: 1px solid #ffb037;
		text-align: center;
		padding: 8px;
		}

		tr:nth-child(even) {
		background-color: #ffe268;
		}
	</style>
</head>

<body style="background-color:powderblue;">
	<nav class = "navbar">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href = "view_customer.php">View all Customers</a></li>
		<li><a href = "transfer_money.php">Transfer Money</a></li>
		<li><a href = "transaction_history.php">View transaction History</a></li>
	</ul>
	</nav>
<br>
	<div>
		<h1 align=center font-family=Arial>Account Details</h1>
		<table style="background-color: lavender;">
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>

			<?php
				$row=mysqli_fetch_array($result);
			?>

			<td><?php echo  $row["C_ID"]; ?></td>
			<td><?php echo  $row["Name"]; ?></td>
			<td><?php echo  $row["Email"]; ?></td>
			<td><?php echo  $row["Balance"]; ?></td>
           </tr>
        </table>
	</div>

	<?php echo "<form method='post' action='transaction.php?Name=$Name'>"?>
<br><br>
	<h3 align=center font-family=Arial>Select the user you want to transfer money to from the dropdown list</h3>
	<table border="0px" style="background-color:lavender;">
		<tr>
		<td>Transfer To:</td>
		<td><select name="user">
			<option>--Select--</option>

			<?php
				$q1="select * from customers";
				$result1=mysqli_query($con,$q1);
				while($row=mysqli_fetch_array($result1)){
			?>

			<option value="<?php echo $row['Name']; ?>"> <?php echo $row["Name"]; ?></option>

			<?php }
			?>

            </select></td></tr>
			<tr><td>Amount:</td><td><input type="text" name="Amount"></td></tr>
			<tr><td></td><td><input type="submit" name="submit" value="Submit" align=center style="margin-top: 10px; width:6em; height:2em; font-size:15px; background-color: skyblue; font-weight: bold;"></td></tr>
	</table>

</form>
<br><br><br>


</body>
</html>
