<?php
$servername="localhost";
$username="ashu";
$password="root";
$dbname="2016cse399";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connetion failed:".mysqli_connect_error());
}
$sql="select * from employees";
if($res=mysqli_query($conn,$sql))
{
	if(mysqli_num_rows($res)>0)
	{
		echo "<table>";
		echo "<tr>";
		echo "<th>FirstName</th>";
		echo "<th>LastName</th>";
		echo "<th>Age</th>";
		echo "</tr>";
		while($row=mysqli_fetch_array($res))
		{
			echo "<tr>";
			echo "<td>".$row["firstname"]."</td>";
			echo "<td>".$row["lastname"]."</td>";
			echo "<td>".$row["age"]."</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	else
	{
		echo "No matching records are found!";
	}
}
else
{
	echo "ERROR:Could not able to execute $sql.".mysqli_error($conn);
}
$sql1="insert into employees (firstname,lastname,age) values('ram','singh',25)";
if(mysqli_query($conn,$sql1))
{
	echo "Records inserted successfully!";
}
mysqli_close($conn);
?>
