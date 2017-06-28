<?php
if(isset($_POST['submit'])=='submit')
{
	echo $name=$_POST['uname'];
	$password=$_POST['pname'];
	$email=$_POST['email'];
	$connect=mysqli_connect("localhost","root","","mm");
	//$sql=mysql_select_db("mm",$connect);
	$sql=mysqli_query($connect,"INSERT INTO `user`(`id`, `name`, `password`, `email`) VALUES ('','$name','$password','$email')");
	if($sql)
	{
		echo "yes";
	}
	else{
		
		echo "no";
	}
	
//echo "yes";
}
else
{
echo "ndsfdso";
}
?>