
<?php


	require("connect_db.php");

	$username=$_POST['mail'];
	$pass=$_POST['pass'];



	
	$sql=mysql_query("SELECT * FROM login WHERE email='$username'");
	if($f=mysql_fetch_array($sql)){
		if($pass==$f['password']){
			header("Location: portada.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}



		


?>