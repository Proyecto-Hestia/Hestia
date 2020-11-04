$(document).ready(function(){ 
	MostrarCategorias(); 
	$("#frmcat_id").attr('readonly',true); 
}); 
 

    $("#RegistrarCategoria").click(function(){
        var frmcat_desc1 = $("#frmcat_desc").val(),
            frmcat_estado1 = $("#frmcat_estado").val();

        $.post("index.php?accion=RegistrarCategoria",{frmcat_desc:frmcat_desc1,
            frmcat_estado:frmcat_estado1},function(datos){

            $("#frmRegistrarCategorias").modal('hide');	
            MostrarCategorias();
        });

        $("#frmcat_desc").val("");
		$("#frmcat_estado").val("");
    });	

    function MostrarCategorias(){
			var table = $('#MostrarCategorias').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarCategorias.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"ID"},
        		{"data":"Descripcion"},
        		{"data":"Estado"},
        		{"data":"Editar"},
        		{"data":"Eliminar"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}
	
	
	function EditarCategoria(id){
		$.post("index.php?accion=EditarCategoria",{id:id},function(data){

			var data = JSON.parse(data);
			console.log(data);
			$("#frmcat_id1").val(data.ID);
			$("#frmcat_desc1").val(data.DES_CAT);
			$("#frmcat_estado1").val(data.ESTADO);
		});

	}

	$("#ActualizarCategoria").click(function(){

		var frmcat_id1 = $("#frmcat_id1").val(),
			frmcat_desc1 = $("#frmcat_desc1").val(),
			frmcat_estado1 = $("#frmcat_estado1").val();

		$.post("index.php?accion=ActualizarCategoria",{
			frmcat_id1:frmcat_id1,
			frmcat_desc1:frmcat_desc1,
			frmcat_estado1:frmcat_estado1
		},function(datos){

			$("#frmEditarCategoria").modal('hide');	
			MostrarCategorias();				
		});	
	});

	function EliminarCategoria(id){
		$.post("index.php?accion=EliminarCategoria",{id:id},function(datos){
			MostrarCategorias();
		});

	}