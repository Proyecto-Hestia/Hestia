$(document).ready(function(){ 
	MostrarMesas(); 
	$("#frmtab_id").attr('readonly',true); 
}); 
 
	

    $("#RegistrarMesa").click(function(){
        var frmcap_tab1 = $("#frmcap_tab").val(),
            frmestado1 = $("#frmestado").val(),
            frmubi1 = $("#frmubi").val();

        $.post("index.php?accion=RegistrarMesa",{
            frmcap_tab:frmcap_tab1,
            frmestado:frmestado1,
            frmubi:frmubi1
        },function(datos){

            $("#frmRegistrarMesa").modal('hide');	
            MostrarMesas();
        });

        $("#frmcap_tab").val("");
        $("#frmestado").val("");
        $("#frmubi").val("");
    });	

    function MostrarMesas(){
			var table = $('#MostrarMesas').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarMesas.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"ID"},
        		{"data":"Capacidad"},
                {"data":"Ubicacion"},
        		{"data":"Estado"},
        		{"data":"Editar"},
        		{"data":"Eliminar"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}
	
	
	function EditarMesa(id){
		$.post("index.php?accion=EditarMesa",{id:id},function(data){

			var data = JSON.parse(data);
            console.log(data);
            $("#frmtab_id1").val(data.ID);
            $("#frmcap_tab1").val(data.CAPACIDAD);
            $("#frmubi1").val(data.UBICACION);
            $("#frmestado1").val(data.ESTADO);
		});

	}

	$("#ActualizarMesa").click(function(){

        var frmtab_id1 = $("#frmtab_id1").val(),
            frmcap_tab1 = $("#frmcap_tab1").val(),
            frmestado1 = $("#frmestado1").val();
            frmubi1 = $("#frmubi1").val();

		$.post("index.php?accion=ActualizarMesa",{
            frmtab_id1:frmtab_id1,
            frmcap_tab1:frmcap_tab1,
            frmestado1:frmestado1,
            frmubi1:frmubi1
        },function(datos){

			$("#frmEditarMesa").modal('hide');	
			MostrarMesas();				
		});	
	});

	function EliminarMesa(id){
		$.post("index.php?accion=EliminarMesa",{id:id},function(datos){
			MostrarMesas();
		});

	}