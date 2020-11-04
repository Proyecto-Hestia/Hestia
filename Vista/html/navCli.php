
<div class="container-fluid fixed-top" id="container">
    <div class="row">
      <div class="col-1 col-sm-1">.</div>
      <div class="col-2 col-sm-2">
          <div id="mySidenav" class="sidenav">
            <div><h5 class="cate">Categorias</h5></div>
            <div class="categorias">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <?php
                while ($filas = $result->fetch()){
              ?>
                <a href="#" type="button" class="btn" onclick="MosPro(<?php echo $filas['id_cat']?>)">
                  <?php echo $filas['des_cat']?>
                </a>
              <?php
                }
              ?>
            </div>
          </div>
          <span style="font-size:3em;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
      </div>
   
      <div class="col-6 col-sm-6">
        <h1 class="titulo">HESTIA</h1>
      </div>
      <div class="col-2 col-sm-2">
        <div id="numero"></div>
        <a  id="pedido" type="button" class="btn btn-sm" data-toggle="modal" data-target="#modalPedido"
           onclick="carrito()">
          <i class="fas fa-store"></i>
        </a>    
        

      </div>
      <div class="col-1 col-sm-1">.</div>
    </div>
</div>
<?php require "Vista/html/modalPedido.php"; ?>
<?php require "Vista/html/modalCuenta.php"; ?>
<script>
  function openNav() {
  document.getElementById("mySidenav").style.width = "42%";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }
</script>

  
<script type="text/javascript" src="Vista/js/cliente.js"></script>
