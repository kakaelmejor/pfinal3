<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];

	require("connect_db.php");
	$checkemail=mysql_query("SELECT * FROM login WHERE email='$mail'");
	$check_mail=mysql_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("ATENCION, YA EXISTE EL MAIL DESIGNADO PARA UN USUARIO, VERIFIQUE SUS DATOS");</script> ';
			}else{
				
				//require("connect_db.php");
				mysql_query("INSERT INTO login VALUES('','$realname','$pass','$mail')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("USUARIO REGISTRADO CON ÉXITO");</script> ';
				mysql_close($link);
			}
			
		}else{
			echo ' <script language="javascript">alert("LAS CONTRASEÑAS SON INCORRECTTAS, NO COINDIDEN...! VUELVA A INTENTARLO");</script> ';
			mysql_close($link);
		}

	
?>