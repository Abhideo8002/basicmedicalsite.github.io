<?php	

				$email=$password="";
				
				$email=$_POST['email'];
				$password=$_POST['password'];
				$conn=mysqli_connect("localhost","root","","mdsearch");
				if(!$conn){
					echo "failed";
				}
			
				$sql="SELECT * FROM register WHERE email='$email' and password='$password'";
				$result=mysqli_query($conn,$sql);
				echo mysqli_num_rows($result);
				if(mysqli_num_rows($result)>0)
				{ 
			
					while($row=mysqli_fetch_assoc($result))
					{
						$id=$row['id'];
						$email=$row['email'];
						session_start();
						$_SESSION['id']=$id;
						$_SESSION['email']=$email;
					}
					header("Location:index.html");
				}
				else
				{
					echo "Invalid login id or Password";
				}
				mysqli_close($conn);
?>