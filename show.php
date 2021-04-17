<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <!-- <link rel="stylesheet" href="opd.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="show.css">
<style>
	#td{
		border: 1px solid black;
			padding-left: 2px;
			text-align: center;
			width: 200px;
	}
</style>

    <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"hms");
	?>

</head>

<body>
					<center>
						<h2>Patient Details</h2>
						<table>
							<tr>
								<td id="td"><b>UHID</b></td>
								<td id="td"><b>Aadhar Number</b></td>
								<td id="td"><b>Age</b></td>
                                <td id="td"><b>Date</b></td>
								<td id="td"><b>Time</b></td>
								<td id="td"><b>OPD</b></td>
                                <td id="td"><b>Gender</b></td>
							</tr>
						</table>
					</center>
					<?php
                    $query = "select * from hms";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<center>
						<table style="border-collapse: collapse;border: 1px solid black;">
							<tr>
								<td id="td"><?php echo $row['uhid']?></td>
								<td id="td"><?php echo $row['adhno']?></td>
								<td id="td"><?php echo $row['age']?></td>
								<td id="td"><?php echo $row['Date']?></td>
                                <td id="td"><?php echo $row['time']?></td>
                                <td id="td"><?php echo $row['opd_type']?></td>
                                <td id="td"><?php echo $row['gen']?></td>
							</tr>
						</table>
						</center>
						<?php
				}
			?>    
</body>

</html>

