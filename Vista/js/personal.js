$(document).ready(function(){ 
	MostrarPersonal(); 
	$("#frmp_id").attr('readonly',true); 
}); 
	

    $("#RegistrarPersonal").click(function(){
		var frmp_id1 = $("#frmp_id").val(),
			frmp_nom1 = $("#frmp_nom").val(),
			frmp_ape1 = $("#frmp_ape").val(),
			frmp_fech1 = $("#frmp_fech").val(),
			frmp_genero1 = $("#frmp_genero").val(),
			frmp_eps1 = $("#frmp_eps").val(),
			frmp_pens1 = $("#frmp_pens").val(),
			frmp_arl1 = $("#frmp_arl").val(),
			frmp_correo1 = $("#frmp_correo").val(),
			frmp_tel1 = $("#frmp_tel").val(),
			frmp_dir1 = $("#frmp_dir").val();

		$.post("index.php?accion=RegistrarPersonal",{
			frmp_id:frmp_id1,
			frmp_nom:frmp_nom1,
			frmp_ape:frmp_ape1,
			frmp_fech:frmp_fech1,
			frmp_genero:frmp_genero1,
			frmp_eps:frmp_eps1,
			frmp_pens:frmp_pens1,
			frmp_arl:frmp_arl1,
			frmp_correo:frmp_correo1,
			frmp_tel:frmp_tel1,
			frmp_dir:frmp_dir1},function(datos){

            $("#frmRegistrarPersonal").modal('hide');	
            MostrarPersonas();
        });

		$("#frmp_id").val("");
		$("#frmp_nom").val("");
		$("#frmp_ape").val("");
		$("#frmp_fech").val("");
		$("#frmp_genero").val("");
		$("#frmp_eps").val("");
		$("#frmp_pens").val("");
		$("#frmp_arl").val("");
		$("#frmp_correo").val("");
		$("#frmp_tel").val("");
		$("#frmp_dir").val("");
    });	

    function MostrarPersonal(){
			var table = $('#MostrarPersonal').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarPersonal.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"ID"},
        		{"data":"Nombre"},
                {"data":"Apellido"},
				{"data":"Fecha"},
                {"data":"Genero"},
                {"data":"Eps"},
                {"data":"Pension"},
                {"data":"Arl"},
				{"data":"Correo"},
				{"data":"Cel"},
				{"data":"Dir"},
        		{"data":"Editar"},
        		{"data":"Eliminar"}
			]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}
	
	function EditarPersonal(id){
		$.post("index.php?accion=EditarPersonal",{id:id},function(data){
			
			var data = JSON.parse(data);
			console.log(data);
			$("#frmp_id1").val(data.ID);
			$("#frmp_nom1").val(data.Nombre);
			$("#frmp_ape1").val(data.Apellido);
			$("#frmp_fech1").val(data.Fecha);
			$("#frmp_genero1").val(data.Genero);
			$("#frmp_eps1").val(data.Eps);
			$("#frmp_pens1").val(data.Pension);
			$("#frmp_arl1").val(data.Arl);
			$("#frmp_correo1").val(data.Correo);
			$("#frmp_tel1").val(data.Cel);
			$("#frmp_dir1").val(data.Dir);
			});
	}

	$("#ActualizarPersonal").click(function(){
		var frmp_id1 = $("#frmp_id1").val(),
			frmp_nom1 = $("#frmp_nom1").val(),
			frmp_ape1 = $("#frmp_ape1").val(),
			frmp_fech1 = $("#frmp_fech1").val(),
			frmp_genero1 = $("#frmp_genero1").val(),
			frmp_eps1 = $("#frmp_eps1").val(),
			frmp_arl1 = $("#frmp_arl1").val(),
			frmp_pens1 = $("#frmp_pens1").val(),
			frmp_correo1 = $("#frmp_correo1").val(),
			frmp_tel1 = $("#frmp_tel1").val(),
			frmp_dir1 = $("#frmp_dir1").val();

		$.post("index.php?accion=ActualizarPersonal",{
			frmp_id1:frmp_id1,
			frmp_nom1:frmp_nom1,
			frmp_ape1:frmp_ape1,
			frmp_fech1:frmp_fech1,
			frmp_genero1:frmp_genero1,
			frmp_eps1:frmp_eps1,
			frmp_pens1:frmp_pens1,
			frmp_arl1:frmp_arl1,
			frmp_correo1:frmp_correo1,
			frmp_tel1:frmp_tel1,
			frmp_dir1:frmp_dir1},function(datos){

			$("#frmEditarPersonal").modal('hide');	
			MostrarPersonal();				
		});	
	});

	function EliminarPersonal(id){
		$.post("index.php?accion=EliminarPersonal",{id:id},function(datos){
			MostrarPersonal();
		});
	}
