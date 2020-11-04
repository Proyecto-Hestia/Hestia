<!-- ..................................MODAL REGISTRAR PERSONA................................--> 
<div class="modal fade" id="frmRegistrarPersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
			<div class="modal-body mb-0"> 
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_id" onkeyup="verificarid();habilitar();" class="form-control" placeholder="Identificacion"> 
						</div> 
						<div class="md-form form-sm">
						<p id="r1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_nom" onkeyup="verificarnam();habilitar();" class="form-control" placeholder="Nombre"> 
						</div>
						<div class="md-form form-sm">
						<p id="r2" style="color:red"></p>
						</div>
					</div>
				</div><br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_ape" onkeyup="verificarape();habilitar();" class="form-control" placeholder="Apellido">   
						</div> 
						<div class="md-form form-sm">
						<p id="r6" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="date" id="frmp_fech" onkeyup="validarfec();habilitar();" class="form-control" placeholder="Fecha de Nacimiento"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmp_genero" class="form-control">
								<option value="F">Femenino</option>
								<option value="M">Masculino</option>
							</select>
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_eps" onkeyup="validareps(),habilitar();" class="form-control" placeholder="EPS"> 
						</div>
						<div class="md-form form-sm">
						<p id="r7" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_pens" onkeyup="validarpens();habilitar();" class="form-control" placeholder="Pensión"> 
						</div>
						<div class="md-form form-sm">
						<p id="r4" style="color:red"></p>
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_arl" onkeyup="validararl();habilitar();" class="form-control" placeholder="ARL"> 
						</div>
						<div class="md-form form-sm">
						<p id="r9" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_correo" onkeyup="validarmailr();habilitar();" class="form-control" placeholder="Correo"> 
						</div>
						<div class="md-form form-sm">
						<p id="r3" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_tel" onkeyup="validartel();habilitar();" class="form-control" placeholder="Celular"> 
						</div>
						<div class="md-form form-sm">
						<p id="r8" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div>  
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_dir" onkeyup="validardir();habilitar();" class="form-control" placeholder="Direccion"> 
						</div> 
						<div class="md-form form-sm">
						<p id="r5" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div>
				</div>
			
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="RegistrarPersonal">Registrar 
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>

<?php //$filas = $result->fetch(); ?>

<!-- .....................................MODAL EDITAR PERSONA.......................................--> 

<div class="modal fade" id="frmEditarPersonal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" disabled="true" id="frmp_id1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_nom1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-1"></div> 
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_ape1" class="form-control">   
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="date" id="frmp_fech1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmp_genero1" class="form-control">
								<option value="F">Femenino</option>
								<option value="M">Masculino</option>
							</select>
						</div> 
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_eps1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_pens1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_arl1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_correo1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_tel1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-1"></div>  
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmp_dir1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-1"></div>
				</div>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarPersonal"> Actualizar
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>
