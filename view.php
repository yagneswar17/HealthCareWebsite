<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <!-- <link rel="stylesheet" href="opd.css"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="view.css">
    <link rel="stylesheet" href="show.css">


    <?php
		session_start();
		$name = "";
		$connection = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($connection,"hms");
	?>
    <center class="sam">
        <form action="" method="post">
            <b>Enter Aadhar Number : </b><input type="text" name="adhno">
            <input type="submit" name="view" value="Search">
        </form>
    </center>
    <div class="filter">
</div>
    <?php
    if(isset($_POST['view']))
    {
                    $query = "select * from hms where adhno = '$_POST[adhno]'";
					$query_run = mysqli_query($connection,$query);
					while ($row = mysqli_fetch_assoc($query_run)) 
					{
						?>
						<table>
							<tr>
								<td>
									<b>UHID No : </b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['uhid']?>" disabled class="sample">
								</td>
							</tr>
							<tr>
								<td>
									<b>Aadhar No : </b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['adhno']?>" disabled class="sample">
								</td>
							</tr>
							<tr>
								<td>
									<b>Age : </b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['age']?>" disabled class="sample">
								</td>
							</tr>
							<tr>
								<td>
									<b>Gender : </b>
								</td> 
								<td>
									<input type="text" value="<?php echo $row['gen']?>" disabled class="sample">
								</td>
							</tr>
						</table>
						<?php
                    }
                }
			?>

</head>

<body>
    


</body>

</html>

