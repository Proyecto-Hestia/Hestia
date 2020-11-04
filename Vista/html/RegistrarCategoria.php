<!-- ..................................MODAL REGISTRAR CATEGORIA................................--> 
<div class="modal fade" id="frmRegistrarCategorias" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
							<input type="text" id="frmcat_desc" onkeyup="verificarCategoria();habilitarcat();" class="form-control" placeholder="Categoria">
							<div class="md-form form-sm">
								<p id="c1" style="color:red"></p>
							</div>
						</div> 
					</div>
					<div class="col-md-4"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-4"></div>
					
					<div class="col-md-4"></div>
				</div>
				<div class="row no-gutters"> 
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<div class="text-center mt-1-half"> 
							<select class="browser-default custom-select" id="frmcat_estado">
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
						<div class="text-center mt-1-half"> 
							<button class="btn btn-cyan mb-2" disabled="true" id="RegistrarCategoria">Registrar 
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
<div class="modal fade" id="frmEditarCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<input type="text" disabled="true" id="frmcat_id1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcat_desc1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-3"></div>
					<div class="col-md-6"> 
						<div class="text-center mt-1-half"> 
							<select class="browser-default custom-select" id="frmcat_estado1">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
							</select>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div> 
				<br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarCategoria">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
