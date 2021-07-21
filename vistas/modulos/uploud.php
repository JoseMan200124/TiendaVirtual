


	<div class="color-banner">
				<div class="showcase-content">
				
					<div class="content-padding">
						<h1 class="title-white">Publica tu servicio y date a conocer ahora</h1>
						<p class="my-1 text-white">
							A continuación encontrarás un formulario el cual deberás llenar para subir el servicio que deseas proporcionar a las personas.
						</p>
					
					</div>
					<img
						src="http://localhost/tienda/vistas/img/plantilla/nosotrosBanner.png"
					/>
				</div>
			</div>
			<div class="padding-formulario-subir-empleo">
<form class='form' action="uploud.php" method="GET">
  <p class='field required'>
    <label class='label required' for='name'>Titulo del servicio</label>
    <input class='text-input' id='name' name='name' required type='text' placeholder = "Entrenador personal">
  </p>
 
 
  <div class='field'>
    <label class='label'>Categorías</label>
    
     <?php
    
				$item = null;
				$valor = null;
                $i = 0; 
                $j = 0; 
                $a = 0; 
				$categorias = ControladorProductos::ctrMostrarCategorias($item, $valor);
foreach ($categorias as $key => $value) {
        echo '<ul class="checkboxes">
        <li class="checkbox">
        <input class="checkbox-input" id="choice-0" name="categorias'.$a++.'" type="checkbox" value="'.$i++.'">
        <label class="checkbox-label" for="choice-0">'.$value["categoria"].'</label>
      </li>
          </ul>'; 
    
}

          $item = "id_categoria";

							$valor = $value["id"];

							$subcategorias = ControladorProductos::ctrMostrarSubCategorias($item, $valor);
							        echo '<label class="label">Subcategorias</label>'; 

							foreach ($subcategorias as $key => $value) {
									if($i == 0 && $value["subcategoria"] != "Educación inicial"){
									 echo ' 
                                      <div class="field">

    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}
                                	if($i == 1 && $value["subcategoria"] != "Educación inicial"){
									 echo ' 
                                      <div class="field">
    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}
                                	if($i == 2 && $value["subcategoria"] != "Programador"){
									 echo ' 
                                      <div class="field">
    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}
                                	if($i == 3 && $value["subcategoria"] != "Medicina General"){
									 echo ' 
                                      <div class="field">
    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}
                                	if($i == 4 && $value["subcategoria"] != "Notario público"){
									 echo ' 
                                      <div class="field">
    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}
                                	if($i == 5 && $value["subcategoria"] != "Alimentos"){
									 echo ' 
                                      <div class="field">
    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}else{
    if($i == 6){
 echo ' 
                                      <div class="field">
    <ul class="options">
                                     <li class="option">
        <input class="option-input" id="option-0" name="option" type="radio" value='.$j++.'>
        <label class="option-label" for="option-0">'.$value["subcategoria"].'</label>
      </li> 
       </ul>
  </div>';}
                                        
 }
                                	
								}	

        ?>

  <p class='field required'>
    <label class='label required' for='name'>Titular</label>
    <input class='text-input' id='name' name='name' required type='text' placeholder = "Ofrezco servicio como entrenador personal en la ciudad de Guatemala">
  </p>
 
  </div>   
  <p class='field'>
    <label class='label' for='about'>Descripción</label>
    <textarea class='textarea' cols='50' id='about' name='about' rows='4'></textarea>
  </p>
   <p class='field required'>
    <label class='label required' for='name'>Precio Q.</label>
    <input class='text-input' id='name' name='name' required type='text' placeholder = "75">
  </p>
  <p class='field half'>
    <input class='button' type='submit' value='Send'>
  </p>
</form>
</div>