<?php 
  

  while ($filas = $result->fetch()) {
    $canti= $filas['id_pro'];
    $foto= $filas['img_pro'];
 
?>

<div id="containerr"> 

  <div class="product-details">
  
   <input type="hidden" value="<?php echo $filas['cat_id']?>" id="catid">
   
      <div class="row">
        <div class="col-8 col-md-8">
        <h1><?php echo $filas['nom_pro']?></h1>
        </div>
        <div class="col-2 col-md-2">
        <button type="button" id="ing" class="btn btn-light" data-toggle="modal" data-target="#modalIngredientes" onclick="MostrarIngredientes(<?php echo $filas['id_pro']?>);">
        <i class="fas fa-utensils"></i>
        </button>
        </div>
        <div class="col-2 col-md-2">
        <button type="button" id="ing" class="btn btn-light" data-toggle="modal" data-target="#modalComen">
        <i class="fas fa-comment-dots"></i>
        </button>
        </div>
      </div>
     
      <div class="row" id="inf">
        <div class="col-12 col-md-12">
          <p class="information">" <?php echo $filas['des_pro']?> "</p>
        </div>
        <div class="col-12 col-md-12">
          <p>$<?php echo $filas['val_pro']?></p>
        </div>
        <div class="col-12 col-md-12">
          <p class="information">Stock: <?php echo $filas['stock_pro']?></p>
        </div>
      </div>      

    <div class="row" id="cantidad">
      <div class="col-4 col-md-4" id="menos">
        <button type="button" class="btn btn-outline-danger" id="btnm" onclick="cantidad(0,<?php echo $canti?>)" >-</button>
      </div>
      <div class="col-4 col-md-4" id="inp">
        <input class="form-control" id="cant<?php echo $canti?>" type="number" value="1" 
        style="width: 4em;height: 2em;margin-left:0.4em;color:black;">
      </div>
      <div class="col-4 col-md-4" id="mas">
        <button type="button" class="btn btn-outline-success" id="btnm" onclick="cantidad(1,<?php echo $canti?>)">+</button>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-12" style="margin-left:3.8em;margin-top:10%;">
      <button type="button" class="btn btn-danger" onclick="consultarCliente(<?php echo $filas['id_pro']?>);" id="Agregar" style="left: 0.4em;width: 9em;height: 3.4em;"> Agregar
        <!-- <span class="item_price" style="background: #8A9089;">$</span> -->
        <!-- <span class="item_add" href="javascript:;">Agregar</span> -->
      </button>
      </div>
    </div>
  </div>
   
  <div class="product-image">
    <?php echo "<img src=\"Vista/img/cupcake.jpg\" width=\"230px\" height=\"230px\""; ?>
  </div>
  
</div>

<?php

  }
  require "Vista/html/modalIngredientes.php";
  require "Vista/html/modalComen.php";
?>

<script src="Vista/js/cliente.js"></script>
