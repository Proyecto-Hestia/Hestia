$(document).ready(function(){ 
	MostrarPedidos(); 
	$("#frmtab_id").attr('readonly',true); 
}); 
 
    function MostrarPedidos(){
			var table = $('#MostrarPedido').DataTable({
			destroy:true,
        	responsive: true,
        	"bDeferRender":true,
        	"sPaginationType":"full_numbers",
        	"ajax":{
        		"url":"VO/MostrarPedidos.php",
        		"type":"POST"
        	},
        	"columns":[
        		{"data":"Id_ped"},
        		{"data":"Id_mes"},
                {"data":"Id_cli"},
        		{"data":"Id_detallePedido"},
        		{"data":"Id_pro"},
                {"data":"Fechor_ini"},
        		{"data":"Fechor_fin"},
        		{"data":"Comentarios"},
        		{"data":"Sin_ingredientes"},
        		{"data":"Cantidad"},
        		{"data":"Estado"}
        	]
    	});
        new $.fn.dataTable.FixedHeader( table );
	}

	/*$("#ActualizarMesa").click(function(){

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
	});*/
