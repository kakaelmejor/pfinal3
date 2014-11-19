<?php 
session_start();

	
	session_destroy();
	echo '<script language = javascript>
	alert("SU SESION HA TERMINADO CORRECTAMENTE")
	self.location = "index.php"
	</script>';

?>



