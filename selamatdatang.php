<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>
	<?php
		$name = $email = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = test_input($_POST["name"]);
			$password = test_input($_POST["password"]);
		}

		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		  return $data;
		}

		if ($_SERVER["REQUEST_METHOD"] == "POST")
			{
				if($name == "affanhabib" )
				{
					$_SESSION['erroruser'] = 0;
				} 
				else
				{
					$_SESSION['erroruser'] = 1;
				}
				if($password == "ahsanulhabib11")
				{
					$_SESSION['errorpwd'] = 0;
				} 
				else
				{
					$_SESSION['errorpwd'] = 1;
				}
			}

			if ($_SERVER["REQUEST_METHOD"] == "POST")
				{
					if ($_SESSION['errorpwd'] == 0 && $_SESSION['erroruser'] == 0)
					{
						date_default_timezone_set("Asia/Jakarta");

						$b = time();
						$hour = date("G",$b);

						if ($hour>=0 && $hour<=11)
						{
							echo "Selamat Pagi ";
							echo $name;
						}
						else if ($hour >=12 && $hour<=14)
						{
							echo "Selamat Siang ";
							echo $name;
						}
						else if ($hour >=15 && $hour<=17)
						{
							echo "Selamat Sore ";
							echo $name;
						}
						else if ($hour >=17 && $hour<=18)
						{
							echo "Selamat Petang ";
							echo $name;
						}
						else if ($hour >=19 && $hour<=23)
						{
							echo "Selamat Malam ";
							echo $name;
						}
					}
					else
					{
						header("location: login.php");
					}
				}
	?>
	</body>
</html>
