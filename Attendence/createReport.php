<!DOCTYPE html>
<htmll>
<head>
	<title>Attendence Report</title>
</head>
	<body>
	
		<h3>Student attendence report for semester 2</h3><br>
		<table>
		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
			<th>IWT</th>
			<th>ISDM</th>
			<th>SPM</th>
			<th>OOC</th>
		</tr>
		<?php 
	    
		$server="localhost";
		$database="school";
		$Username="root";
		$password="user321";
		$conn = mysqli_connect("$server","$Username","$password","$database");
		$records = mysqli_query($conn,"select * from attendence tabale where ISDM>10 and IWT>10 and SPM>10 and OOC>10");
		
		while($data = mysqli_fetch_array($records))
		{
		 
		?>
		<tr>
			<td><?php echo $data['stuId']; ?></td>
			<td><?php echo $data['stuName']; ?></td>
			<td><?php echo $data['ISDM'] ?></td>
			<td><?php echo $data['IWT'] ?></td>
			<td><?php echo $data['SPM'] ?></td>
			<td><?php echo $data['OOC'] ?></td>
		</tr>
		<?php
			}
		}
		?>
		
		</table>

	</body>

</html>