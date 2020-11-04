$(document).ready(function(){ 
	MostrarProductos(); 
	$("#frmid").attr('readonly',true); 
}); 

	$("#RegistrarProductos").click(function(){
			var frmnombre1 = $("#frmnombres").val(),
			frmcategoria_id1 = $("#frmcategorias_id").val(),
			frmdes_pro1 = $("#frmdes_pro").val(),
			frmimg_pro1 = $("#frmimg_pro").val(),
			frmstock1 = $("#frmstock").val(),
			frmstockmin1 = $("#frmstockmin").val(),
			frmval_pro1 = $("#frmval_pro").val(),
			frmestado1 = $("#frmestado").val();

		$.post("index.php?accion=RegistrarProductos",{frmnombre:frmnombre1,
			frmcategoria_id:frmcategoria_id1,
			frmimg_pro:frmimg_pro1,
			frmdes_pro:frmdes_pro1,
			frmstock:frmstock1,
			frmstockmin:frmstockmin1,
			frmval_pro:frmval_pro1,
			frmestado:frmestado1
		},function(datos){

			$("#frmRegistrarProducto").modal('hide');	
			MostrarProductos();
		});

		$("#frmnombres").val("");
		$("#frmcategorias_id").val("");
		$("#frmimg_pro").val("");
		$("#frmdes_pro").val("");
		$("#frmstock").val("");
		$("#frmstockmin").val("");
		$("#frmval_pro").val("");
		$("#frmestado").val("");
	});	

	function MostrarProductos(){
		var table = $('#MostrarProductos').DataTable({
		destroy:true,
		responsive: true,
		"bDeferRender":true,
		"sPaginationType":"full_numbers",
		"ajax":{
			"url":"VO/MostrarProductos.php",
			"type":"POST"
		},
		"columns":[
			{"data":"ID"},
			{"data":"Nombre"},
			{"data":"Categoria"},
			{"data":"Imagen"},
			{"data":"Descripcion"},
			{"data":"Stock"},
			{"data":"Stock_minimo"},
			{"data":"Estado"},
			{"data":"Valor_venta"},
			{"data":"Editar"},
			{"data":"Eliminar"}
		]
	});
	new $.fn.dataTable.FixedHeader( table );
	}

	function EditarProducto(id){
		$.post("index.php?accion=EditarProducto",{id:id},function(data){

			var data = JSON.parse(data);
			console.log(data);
			$("#frmid1").val(data.id_pro);
			$("#frmnombre1").val(data.nom_pro);
			$("#frmcategoria_id1").val(data.cat_id);
			$("#frmimg_pro1").val(data.img_pro);
			$("#frmdes_pro1").val(data.des_pro);
			$("#frmstock1").val(data.stock);
			$("#frmstockmin1").val(data.stock_min);
			$("#frmval_pro1").val(data.val_pro);
			$("#frmestado1").val(data.estado);
		});

	}

	$("#ActualizarProducto").click(function(){

		var frmid1 = $("#frmid1").val(),
			frmnombre1 = $("#frmnombre1").val(),
			frmcategoria_id1 = $("#frmcategoria_id1").val(),
			frmimg_pro1 = $("#frmimg_pro1").val(),
			frmdes_pro1 = $("#frmdes_pro1").val(),
			frmstock1 = $("#frmstock1").val(),
			frmstockmin1 = $("#frmstockmin1").val(),
			frmval_pro1 = $("#frmval_pro1").val(),
			frmestado1 = $("#frmestado1").val();

		$.post("index.php?accion=ActualizarProducto",{frmid1:frmid1,
			frmnombre1:frmnombre1,
			frmcategoria_id1:frmcategoria_id1,
			frmimg_pro1:frmimg_pro1,
			frmdes_pro1:frmdes_pro1,
			frmstock1:frmstock1,
			frmstockmin1:frmstockmin1,
			frmval_pro1:frmval_pro1,
			frmestado1:frmestado1},function(datos){

			$("#frmEditarProducto").modal('hide');	
			MostrarProductos();				
		});	
	});

	function EliminarProductos(id){
		$.post("index.php?accion=EliminarProducto",{id:id},function(datos){
			MostrarProductos();
		});	
	}


	