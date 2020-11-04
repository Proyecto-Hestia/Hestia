<!-- ..................................MODAL REGISTRAR PRODUCTO................................--> 
<div class="modal fade" id="frmRegistrarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"> 
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
							<input type="text" id="frmnombres" onkeyup="valnom();habilitarpro();" class="form-control" placeholder="Nombre"> 
						</div> 
						<div class="md-form form-sm">
						<p id="p1" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
						<select class="browser-default custom-select" id="frmcategorias_id">
							<?php while ($filas = $result2->fetch()) { ?>
								<option value="<?php echo $filas['id_cat'] ?>"><?php  echo $filas['id_cat']."-".$filas["des_cat"] ?></option>
							<?php } ?>
						</select>    
						</div> 
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div>
					<div class="col-md-4">
						<div class="md-form form-sm"> 
							<input type="text" id="frmdes_pro" onkeyup="valdesc();habilitarpro();" class="form-control" placeholder="Descripcion"> 
						</div>
						<div class="md-form form-sm">
						<p id="p2" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmimg_pro" class="form-control" placeholder="Imagen"> 
						</div>
					</div>
					<div class="col-md-1"></div>
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmstock" onkeyup="valstock();habilitarpro();" class="form-control" placeholder="Stock"> 
						</div>
						<div class="md-form form-sm">
						<p id="p3" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmstockmin" onkeyup="valstockmin();habilitarpro();" class="form-control" placeholder="Stock Minimo"> 
						</div>
						<div class="md-form form-sm">
						<p id="p5" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmval_pro" onkeyup="valval();habilitarpro();" class="form-control" placeholder="Valor de venta"> 
						</div> 
						<div class="md-form form-sm">
						<p id="p4" style="color:red"></p>
						</div>
					</div>
					<div class="col-md-2"></div> 
					<div class="col-md-4">
						<div class="md-form form-sm">
							<select class="browser-default custom-select" id="frmestado">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
							</select>
						</div> 
					</div>
					<div class="col-md-1"></div>  
				</div>
				<br><br>	
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="RegistrarProductos">Registrar 
					<i class="fa fa-send ml-1"></i>
					</button>
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>


<!-- .....................................MODAL EDITAR PRODUCTO.......................................--> 
<div class="modal fade" id="frmEditarProducto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
							<input type="text" disabled="true" id="frmid1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-2"></div> 
				</div>
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmnombre1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmcategoria_id1" class="form-control"> 
						</div> 
					</div> 
					<div class="col-md-1"></div> 
				</div> 
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmimg_pro1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-2"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmdes_pro1" class="form-control"> 
						</div> 
					</div>
					<div class="col-md-1"></div> 
				</div>  
				<br>
				<div class="row no-gutters">
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmstock1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmstockmin1" class="form-control"> 
						</div>
					</div> 
					<div class="col-md-1"></div>  
				</div> 
				<br>
				<div class="row no-gutters"> 
					<div class="col-md-1"></div> 
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<input type="text" id="frmval_pro1" class="form-control"> 
						</div>
					</div>
					<div class="col-md-2"></div>  
					<div class="col-md-4"> 
						<div class="md-form form-sm"> 
							<select class="browser-default custom-select" id="frmestado1">
								<option value="ACTIVO">ACTIVO</option>
								<option value="INACTIVO">INACTIVO</option>
							</select>
						</div> 
					</div>
					<div class="col-md-1"></div>  
				</div> 
				<br><br>
				<div class="text-center mt-1-half"> 
					<button class="btn btn-cyan mb-2" id="ActualizarProducto">Actualizar 
						<i class="fa fa-send ml-1"></i>
					</button> 
				</div> 
			</div> 
		</div> 
		<!--/.Content--> 
	</div> 
</div>