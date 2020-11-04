
<div class="modal fade" id="modalCli">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title">Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </div>
        
        <div class="modal-body">
           <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12">
                  <div>documento</div>
                </div>
                <div class="col-12 col-md-12">
                    <input class="form-control" id="idCli" onkeyup="valId();val();" autocomplete="off">
                    <p id="c1" style="color:red;"></p>
                    <p id="c2" style="color:red;"></p>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-12 col-md-12">
                  <div>pin</div>
                </div>
                <div class="col-12 col-md-12">
                    <input class="form-control" id="pinCli" onkeyup="valPin();val();" autocomplete="off">
                    
                </div>
            </div> -->
            <div class="row" id="datoc">
            <form>
              <table>
                <tr>
                  <td>
                    <div class="col-3 col-md-3">
                      <div style="margin-top:0.7em;">nombre</div>
                    </div>
                  </td>
                  <td>
                    <div class="col-9 col-md-9">
                      <input class="form-control" id="nomCli" style="height: 2em; margin-top:0.5em; width:8em;" >
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-4 col-md-4">
                      <div style="margin-top:0.7em;">apellido</div>
                    </div>
                  </td>
                  <td>
                    <div class="col-8 col-md-8">
                      <input class="form-control" id="apeCli" style="height: 2em; margin-top:0.5em; width:8em;">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-4 col-md-4">
                      <div style="margin-top:0.7em;">celular</div>
                    </div>
                  </td>
                  <td>
                    <div class="col-8 col-md-8">
                      <input class="form-control" id="celCli"  style="height: 2em; margin-top:0.5em; width:8em;">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-4 col-md-4">
                      <div style="margin-top:0.7em;">correo</div>
                    </div>
                  </td>
                  <td>
                    <div class="col-8 col-md-8">
                      <input class="form-control"  id="corCli" style="height: 2em; margin-top:0.5em; width:8em;">
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="col-4 col-md-4">
                      <div style="margin-top:0.7em;">direccion</div>
                    </div>
                  </td>
                  <td>
                    <div class="col-8 col-md-8">
                      <input class="form-control" id="dirCli" style="height: 2em; margin-top:0.5em; width:8em;" >
                    </div>
                  </td>
                </tr>
              </table>
                <p id="c3" style="color:red;"></p>
            </form>
            </div>
           </div>
        </div>
        <div class="modal-footer">
            <button type="button" id="regCli" onclick="validarformulario();" class="btn btn-danger btn-sm">
              <i class="fas fa-paper-plane"></i>
            </button>
            <button type="button" id="consultarCli" class="btn btn-success btn-sm" onclick="consultarCli()">
                <i class="far fa-check-circle"></i>
            </button>
        </div>
  </div>
  <script type="text/javascript" src="Vista/js/cliente.js"></script>
