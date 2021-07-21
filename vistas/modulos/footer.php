<footer class="py-6 second-color">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 mr-auto">
                <h5>Acerca De Fawok</h5>
                <p class="text-muted footer_size">Magnis modipsae que voloratati andigen daepeditem quiate conecus aut labore.
                    Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam explabo.</p>
                    <ul class="list-inline social social-sm black">
					<?php

					$social = ControladorPlantilla::ctrEstiloPlantilla();

					$jsonRedesSociales = json_decode($social["redesSociales"],true);		

					foreach ($jsonRedesSociales as $key => $value) {

						echo '<li>
								<a href="'.$value["url"].'hover" target="_blank">
									<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
								</a>
							</li>';
					}

					?>
			
				</ul>
            </div>
            <div class="col-sm-2">
                <h5>Legalidad</h5>
                <ul class="list-unstyled black">
                    <li><a href="http://localhost/tienda/privacidadfawok" class="footer_size">Privacidad</a></li>
                    <li><a href="http://localhost/tienda/terminosfawok" class="footer_size">Terminos</a></li>
                    <li><a href="http://localhost/tienda/politicafawok" class="footer_size">Politica del sitio</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Patrocinar</h5>
                <ul class="list-unstyled black">
                    <li><a href="http://localhost/tienda/referirfawok" class="footer_size">Refiere a un amigo</a></li>
                    <li><a href="http://localhost/tienda/afiliarfawok" class="footer_size">Afiliate</a></li>
                </ul>
            </div>
            <div class="col-sm-2">
                <h5>Ayuda</h5>
                <ul class="list-unstyled black">
                    <li><a href="http://localhost/tienda/soportefawok" class="footer_size">Soporte</a></li>
                    <li><a href="#" class="footer_size">ingresar</a></li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 text-muted text-center small-xl footer_size">
                &copy; 2021 Fawok - Todos los derechos reservados
            </div>
        </div>
    </div>
</footer>
