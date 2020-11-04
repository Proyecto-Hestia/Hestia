<!-- ..................................MODAL REGISTRAR CATEGORIA................................--> 
<div class="modal fade" id="frmRegistrarMesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
	<div class="modal-dialog modal-lg cascading-modal" role="document"> 
		<!--Content--> 
		<div class="modal-content"> 
			<!--Header--> 
			<div class="modal-header cyan white-text"> 
				<h4 class="title">
					<i class="fa fa-pencil"></i> Registro
				</h4> 
				<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div> 
			<!--Body--> 
			<div class="modal-body mb-0" id="container"> 

				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcap_tab" onkeyup="vercat();habilitarmesas();" class="form-control" placeholder="Capacidad"> 
						</div>
						<div class="md-form form-sm">
						<p id="m1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
                <br>
                <div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label>Estado</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<select class="browser-default custom-select" id="frmestado">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
							</select>
						</div> 
					</div>
					<div class="col-md-4"></div>
                </div> 
                <br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label >Ubicacion</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<input type="text" id="frmubi" class="form-control" placeholder="Ubicacion"> 
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<button class="btn btn-cyan mb-2" id="RegistrarMesa">Registrar 
							<i class="fa fa-send ml-1"></i>
							</button>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
				
				

			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>


<!-- .....................................MODAL EDITAR CLIENTE.......................................--> 
<div class="modal fade" id="frmEditarMesa" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg cascading-modal" role="document"> 
		<!--Content--> 
		<div class="modal-content"> 
			<!--Header--> 
			<div class="modal-header cyan white-text"> 
				<h4 class="title">
					<i class="fa fa-pencil"></i> Actualizar
				</h4> 
				<button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close"> 
					<span aria-hidden="true">&times;</span> 
				</button> 
			</div> 
			<!--Body--> 
			<div class="modal-body mb-0"> 
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" disabled="true" id="frmtab_id1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcap_tab1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label for="frmestado">Estado</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="text-center mt-1-half"> 
							<select class="seleccion" id="frmestado1">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
							</select>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<center><label for="frmmesero">Mesero</label> </center>
					</div>
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="text-center mt-1-half"> 
							<input type="text" class="form-control" id="frmubi1">
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarMesa">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
