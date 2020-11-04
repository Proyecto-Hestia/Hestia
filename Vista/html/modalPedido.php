<div class="modal fade" id="modalPedido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pedido</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="bolsa">
            <div class="row">
              <div class="col-12 col-md-12">
                  <div id="carrito"></div>
                  <br>           
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
      <button id="btnpago" type="button" class="btn btn-dark btn-sm" disabled="true" data-dismiss="modal" onclick="cuenta()" >
      Pedir cuenta
      </button>
      <button id="btncuenta" type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#pago" disabled="true" onclick="cue()">
      Cuenta
      </button>
      </div>
    </div>
  </div>
</div>

<?php require "Vista/html/modalCuenta.php"; ?>
  <script type="text/javascript" src="Vista/js/cliente.js"></script>
 