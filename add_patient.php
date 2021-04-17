<?php
	$connection = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connection,"hms");
	$query = "insert into hms values('',$_POST[uhid],'$_POST[adhno]','$_POST[age]','$_POST[Date]','$_POST[time]','$_POST[opd_type]','$_POST[gen]')";
	$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
	alert("Student added successfully.");
	window.location.href = "opd.php";
</script>
