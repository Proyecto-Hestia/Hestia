
  <?php
    $total=0;
    $proto=0;
    while ($filas=$result->fetchObject()) {
        $subtotal= $filas->cant * $filas->val_pro;
        $total = $total + $subtotal;
        $proto = $proto + $filas->cant;  
}
?>
<div class="container-fluid">

<div class="row">
  <div class="col-9 col-md-9" >
    <p>Total productos:</p>
  </div>
  <div class="col-3 col-md-3">
    <p><?php echo $proto;?></p>
  </div>
</div>

 <div class="row">
  <div class="col-7 col-md-7" >
    <p>Total a pagar:</p>
  </div>
  <div class="col-5 col-md-5">
    <p> <?php echo $total;?></p>
  </div>
</div>
<div class="row">
  <div class="col-4 col-md-4">
    <p>Calificar:</p>
  </div>
</div>

<div class="row">
  <div class="col-8 col-md-8" style="margin-top:-1.3em;">
    <div class="valoracion">
      <input id="radio1" type="radio" name="estrellas" value="5">
      <label for="radio1">★</label>
      <input id="radio2" type="radio" name="estrellas" value="4">
      <label for="radio2">★</label>
      <input id="radio3" type="radio" name="estrellas" value="3">
      <label for="radio3">★</label>
      <input id="radio4" type="radio" name="estrellas" value="2">
      <label for="radio4">★</label>
      <input id="radio5" type="radio" name="estrellas" value="1">
      <label for="radio5">★</label>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-12 col-md-12">
    <p id="com"></p>
  </div>
</div>

</div>
   

<script type="text/javascript" src="Vista/js/cliente.js"></script>