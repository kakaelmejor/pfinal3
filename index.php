<!DOCTYPE html>

    <head>
        <meta charset="UTF-8" />

        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>LOGIN Y REGISTRO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="LOGIN Y REGISTRO" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
    </head>
    <body>
        <div class="container">
            
            <header>
                <h1>LOGIN Y REGISTRO</h1>
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                         <form action="validar.php" method="post">
                            
                            <h1>Log in</h1> 
                           
               <p><label data-icon="u" > E-MAIL </label> 
                  <input class="form-group has-success" name="mail" required type="text" placeholder="E-MAIL: @gmail; @hotmail"/>
                </p>
             <p><label data-icon="p"> CONTRASEÑA </label>
                 <input name="pass" required type="password" placeholder="ejemplo: 1234Ac*" />
               </p>
               
               
                                <p class="keeplogin"> 
									<input type="checkbox" name="loginkeeping" id="loginkeeping" value="loginkeeping" />
									Recordar mi contraseña
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                                <p class="change_link">
									No estas registrado...?
									<a href="#toregister" class="to_register">REGISTRATE</a>
								</p>
                            </form>
                        </div>

						<!-- formulario registro -->

                         <form  method="post" action="">
                        <div id="register" class="animate form">
                           
                                <h1> Sign up </h1> 
                                <p> 
                                    <label data-icon="u">NOMBRE</label>
                                    <input name="realname" required type="text" class="form-control" placeholder="Usuario_390" />
                                </p>
                                <p> 
                                    <label data-icon="e" > E-MAIL</label>
                                    <input name="nick" required type="text" class="form-control" placeholder="mi_correo@mail.com"/> 
                                </p>
                                <p> 
                                    <label data-icon="p"> CONTRASEÑA </label>
                                    <input name="pass" required type="password" class="form-control" placeholder="Ejemplo: X8df!90EO"/>
                                </p>
                                <p> 
                                    <label data-icon="p">CONFIRMA TU CONTRASEÑA </label>
                                    <input name="rpass" required type="password" class="form-control" placeholder="Ejemplo: X8df!90EO"/>
                                </p>
                                   
                                <p class="signin button"> 
									<input class="btn btn-danger" type="submit" value="Sign up" name="submit"/> 
								</p>
                                
                                <p class="change_link">  
									Ya eres Miembro...!
									<a href="#tologin" class="to_register"> IR A LOG IN </a>
								</p>
                            </form>
                        </div>
                        
                        <?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
                        <!--Fin formulario registro -->
						
                    </div>
                    
                </div>  
                
            </section>
            
        </div>
        
    </body>
</html>