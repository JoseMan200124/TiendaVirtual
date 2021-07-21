
<!--=====================================
TOP
======================================-->

<div class="container-fluid barraSuperior" id="top">
	
	<div class="container">
		
		<div class="row">
	
			<!--=====================================
			SOCIAL
			======================================-->

			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 social">

   	

					<?php

					$social = ControladorPlantilla::ctrEstiloPlantilla();
				

					?>
			
					<!--=====================================
			LOGOTIPO
			======================================-->

				

			</div>
			

			<!--=====================================
			REGISTRO
			======================================-->


		</div>	

	</div>

</div>

<!--=====================================
HEADER
======================================-->

<header class="container-fluid padding-left">
				<div class="col-lg-2 col-md-3 col-sm-2 col-xs-12" >
	<a href="/tienda">
						
					<img src="http://localhost/tienda/<?php echo $social["logo"]; ?>" class="img-responsive">

				</a>

			</div>
	<div class="container">
	
		
		<div class="row" id="cabezote">

	

			<!--=====================================
			BLOQUE CATEGORÍAS Y BUSCADOR
			======================================-->

			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
					
				<!--=====================================
				BOTÓN CATEGORÍAS
				======================================-->

				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
					
					<p>CATEGORÍAS
					
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					
					</p>

				</div>

				<!--=====================================
				BUSCADOR
				======================================-->
				
				<div class="input-group col-lg-8 col-md-8 col-sm-8 col-xs-12" id="buscador">
					
					<input type="search" name="buscar" class="form-control" placeholder="Buscar...">	

					<span class="input-group-btn">
						
						<a href="#" class="icono_buscar">

							<button class="btn btn-default backColor" type="submit">
								
								<i class="fa fa-search"></i>

							</button>

						</a>

					</span>

				</div>
			
			</div>

			<!--=====================================
			CARRITO DE COMPRAS
			======================================-->
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12" >
			<ul>
			<?php
			   
			   if(isset($_SESSION["validarSesion"])){

					if($_SESSION["validarSesion"] == "ok"){
									if($_SESSION["modo"] == "directo"){
										
											if($_SESSION["foto"] != ""){
												echo '
												
												<img class="img-circle" src="'.$url.$_SESSION["foto"].'" width="10%">
												
												
												'; 
											
											
											
											}
											else{
												echo '
												
												<img class="img-circle" src="'.$servidor.'\vistas\img\usuarios\default\anonymous.png" width="10%">
												
												
												'; 
											}

									}
                                    if($_SESSION["modo"] == "facebook"){
                                        echo '
												
                                        <img class="img-circle" src="'.$_SESSION["foto"].'" width="10%">
                                        
                                        
                                        '; 
                                    }


                                    echo'
                                    <a class="btn-2" href="'.$url.'perfil">Ver perfil</a></li>
                                    <a class="btn-2" href="'.$url.'salir">Salir</a>'; 

					}

			   }else{
					echo '   <a href="#modalIngreso" class= "btn btn-log" data-toggle="modal">Ingresar</a>
					<a href="#modalRegistro" class="btn btn-log"data-toggle="modal">Crear cuenta</a>'; 
			   }
			   ?>
			 
			  
		 	</ul>

			</div>

			
			


		</div>


		<!--=====================================
		CATEGORÍAS
		======================================-->

		<div class="col-xs-12 backColor" id="categorias">

			<?php

				$item = null;
				$valor = null;

				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);

				foreach ($categorias as $key => $value) {

					echo '<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12 text-black">
							
							<h4>
								<a href="'.$url.$value["ruta"].'" class="pixelCategorias">'.$value["categoria"].'</a>
							</h4>
							
							<hr>

							<ul>';

							$item = "id_categoria";

							$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
							
							foreach ($subcategorias as $key => $value) {
									
									echo '<li><a href="'.$url.$value["ruta"].'" class="pixelSubCategorias">'.$value["subcategoria"].'</a></li>';
								}	
								
							echo '</ul>

						</div>';
				}

			?>	

		</div>

	</div>

</header>

<!--VENTANA MODAL-->
<div class="modal fade modalFormulario" id="modalRegistro" role"dialog">

<div class="modal-dialog">
    <div class="modal-content">
        
   
        <div class="modal-body modalTitulo">
             <h3 class="backColor">REGISTRARSE</h3>
              <button type="button" class="close" data-dismiss="modal">&times;</button>

        <!--===========================
                       REGISTRO FACEBOOK
           ========================-->
                             <div class="col-sm-6 col-xs-12 facebook" >
                                 <p>
                                     <i class="fa fa-facebook"></i>
                                     Registro con facebook
                                 </p>
                             </div>
                              <!--===========================
                       REGISTRO GOOGLE
           ========================-->
                            <div class="col-sm-6 col-xs-12 google">
                                 <p>
                                     <i class="fa fa-google"></i>
                                     Registro con google
                                 </p>
                             </div>
                             
                                 <!--===========================
                       REGISTRO DIRECTO
           ========================-->
                       
                       <form method="post" onsubmit="return registroUsuario()">
                           
                           
                           <hr>
                           <div class="form-group">
                            <div class="input-group">
                                
                                <span class="input-group-addon">
                                    
                                    <i class="glyphicon glyphicon-user"></i>
                                </span>
                                <input type="text" class="form-control text-uppercase" id="regUsuario" name= "regUsuario" placeholder="Nombre completo" required>
                            </div>   
                               
                           </div>
                              <div class="form-group">
                            <div class="input-group">
                                
                                <span class="input-group-addon">
                                    
                                    <i class="glyphicon glyphicon-envelope"></i>
                                </span>
                                <input type="email" class="form-control" id="regEmail" name= "regEmail" placeholder="Correo Electronico" required>
                            </div>   
                               
                           </div>
                             <div class="form-group">
                            <div class="input-group ">
                                
                                <span class="input-group-addon">
                                    
                                    <i class="glyphicon glyphicon-lock"></i>
                                </span>
                                <input type="password" class="form-control" id="regPassword" name="regPassword" placeholder="Contraseña" required>
                            </div>   
                               
                           </div>
                           
                           
                           
                           <!--==============TERMINOS Y CONDICIONES==================-->
                           
                           
                           
                        
                           <div class="checkBox">
                               <label>
                                  <input id="regPoliticas" type="checkbox">
                                   
                                   
                                   <small>
                                        Al registrarse, usted acepta muestras condiciones de uso y políticas de privacidad
                                       <br>
                                         <a href="https://www.iubenda.com/privacy-policy/37751330" class="iubenda-white iubenda-noiframe iubenda-embed iubenda-noiframe " title="Política de Privacidad ">Leer más</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                    
                                   </small>
                               </label>
                               
                               
                           </div>
                  
                          
						   <?php

$registro = new ControladorUsuarios();
$registro -> ctrRegistroUsuario();

?>

                           <input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">
                           
                           
                           
                       </form>
                        </div>
        <div class="modal-footer">
            
            ¿Ya tienes una cuenta registrada? | <strong><a href="#modalIngreso" data-dismiss="modal" data-toggle="modal">Ingresar</a></strong>
            
        </div>
    </div>
    
</div>

</div>



<!--VENTANA MODAL PARA INGRESO-->

<div class="modal fade modalFormulario" id="modalIngreso" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">INGRESAR</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			INGRESO FACEBOOK
			======================================-->

			<div class="col-sm-6 col-xs-12 facebook">
				
				<p>
				  <i class="fa fa-facebook"></i>
					Ingreso con Facebook
				</p>

			</div>

			<!--=====================================
			INGRESO GOOGLE
			======================================-->
			<a href="<?php echo $rutaGoogle; ?>">
			
				<div class="col-sm-6 col-xs-12 google">
					
					<p>
					  <i class="fa fa-google"></i>
						Ingreso con Google
					</p>

				</div>

			</a>

			<!--=====================================
			INGRESO DIRECTO
			======================================-->

			<form method="post">
				
			<hr>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>

						<input type="email" class="form-control" id="ingEmail" name="ingEmail" placeholder="Correo Electrónico" required>

					</div>

				</div>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-lock"></i>
						
						</span>

						<input type="password" class="form-control" id="ingPassword" name="ingPassword" placeholder="Contraseña" required>

					</div>

				</div>

				

				<?php

					$ingreso = new ControladorUsuarios();
					$ingreso -> ctrIngresoUsuario();

				?>
				
				<input type="submit" class="btn btn-default backColor btn-block btnIngreso" value="ENVIAR">	

				<br>

				<center>
					
					<a href="#modalPassword" data-dismiss="modal" data-toggle="modal">¿Olvidaste tu contraseña?</a>

				</center>

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>


<!--===============================
VENTANA MODAL PARA OLVIDO DE CONTRASEÑA
==================================-->

<div class="modal fade modalFormulario" id="modalPassword" role="dialog">

    <div class="modal-content modal-dialog">

        <div class="modal-body modalTitulo">

        	<h3 class="backColor">SOLICITUD DE NUEVA CONTRASEÑA</h3>

           <button type="button" class="close" data-dismiss="modal">&times;</button>
        	
			<!--=====================================
			OLVIDO CONTRASEÑA
			======================================-->

			<form method="post">


            <label class="texted-muted">Escribe el correo electrónuco con el que estás registrado y allí te enviaremos una nueva contraseña: </label>

				<div class="form-group">
					
					<div class="input-group">
						
						<span class="input-group-addon">
							
							<i class="glyphicon glyphicon-envelope"></i>
						
						</span>
						<input type="email" class="form-control" id="passEmail" name="passEmail" placeholder="Correo Electrónico" required>

					</div>

				</div>			

                <?php

$Password = new ControladorUsuarios();
$Password -> ctrOlvidoPassword();

?>
				<input type="submit" class="btn btn-default backColor btn-block" value="ENVIAR">	

			</form>

        </div>

        <div class="modal-footer">
          
			¿No tienes una cuenta registrada? | <strong><a href="#modalRegistro" data-dismiss="modal" data-toggle="modal">Registrarse</a></strong>

        </div>
      
    </div>

</div>
