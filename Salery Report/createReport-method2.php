<!DOCTYPE html>
<htmll>
<head>
	<title> salery sheet </title>
</head>
	<body>
	
		<h3>Salary Sheet for November</h3><br>
		<table>
		<tr>
			<th>Employee ID</th>
			<th>Employee Name</th>
			<th>Basic Salary</th>
			<th>OT Rate</th>
			<th>OT Hours</th>
			<th>Salary with OT</th>
		</tr>
		<?php 
	
		$conn = mysqli_connect("localhost","root","user321","employee");
		  // Check connection
          if($conn === false){
              die("ERROR: Could not connect. " 
                  . mysqli_connect_error());
          }
		  
		$records = mysqli_query($conn,"select * from salary tabale where Month='11'");//method 2 filter month using where
		
		while($data = mysqli_fetch_array($records))
		{
		 $OTRate = $data['OTRate'];
         $OTHours = $data['OTHours'];
		 $BasicSal = $data['BasicSalary'];
		 
         $TotalSal = ($OTrate*$OTHours)+$BasicSal;
		 
		?>
		
		<tr>
			<td><?php echo $data['empID']; ?></td>
			<td><?php echo $data['empName']; ?></td>
			<td><?php echo $BasicSal ?></td>
			<td><?php echo $OTRate ?></td>
			<td><?php echo $OTHours ?></td>
			<td><?php echo $TotalSal ?></td>
		</tr>
		<?php
		
		}
		?>
		
		</table>

	</body>

</html>