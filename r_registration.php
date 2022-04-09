<?php	

				$name=$email=$contact=$password;
				$name=$_POST['name'];
				$email=$_POST['email'];
				$contact=$_POST['contact'];
				$password=$_POST['password'];
				$conn=mysqli_connect("localhost","root","","mdsearch");
				if(!$conn){
					echo "failed";
				}
			
				$sql="INSERT INTO register(name,email,contact,password) VALUES('$name','$email','$contact','$password')";
				$result=mysqli_query($conn,$sql);
				if($result)
				{ 
					header("Location:login.php");
				}
				else
				{
					echo "error:".$sql;
				}
				mysqli_close($conn);
?>