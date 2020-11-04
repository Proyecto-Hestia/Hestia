
var cont,cont1,cont2; 
//cliente
function registrarCliente(){

	idCli1 = $("#idCli").val(); 
	// pinCli1 = $("#pinCli").val(); 
	nomCli1 = $("#nomCli").val();
	apeCli1 = $("#apeCli").val();
	celCli1 = $("#celCli").val();
	corCli1 = $("#corCli").val();
	dirCli1 = $("#dirCli").val();
	$.post("index.php?accion=RegCli",{
	idCli:idCli1,
	// pinCli:pinCli1,
	nomCli:nomCli1,
	apeCli:apeCli1,
	celCli:celCli1,
	corCli:corCli1,
	dirCli:dirCli1,},
		function(datos){ 
			$("#modalCli").modal('hide'); 
		});
	$("#idCli").val(""); 
	// $("#pinCli").val("");
	$("#nomCli").val(""); 
	$("#apeCli").val(""); 
	$("#celCli").val(""); 
	$("#corCli").val(""); 
	$("#dirCli").val(""); 

	Swal.fire({
		position: 'top-center',
		icon: 'success',
		title: 'Bienvenido',
		showConfirmButton: false,
		timer: 1200
		})
}

function consultarCli(){
	id = document.getElementById("idCli").value;
	// pin = document.getElementById("pinCli").value;
	var url = "index.php?accion=consultarCli&id=" + id;
    $("#c2").load(url,function(){
    });
}

//validaciones cliente
function valId(){
	if (!document.getElementById("idCli").value.trim()==""){
		id = document.getElementById("idCli").value;
		if(id.length<8 || isNaN(id)){
			document.getElementById('c1').innerHTML='Documento no valido';
		}else{
			document.getElementById('c1').innerHTML='';
			cont2=1;
		}
    }else{
		document.getElementById('c1').innerHTML='Documento no valido';
		cont2=2;
	}	
}
// function valPin(){
// 	if (!document.getElementById("pinCli").value.trim()==""){
// 		pin = document.getElementById("pinCli").value;
// 		if(pin.length<4 || isNaN(pin)){
// 			document.getElementById('c1').innerHTML='pin no valido';
// 		}else{
// 			document.getElementById('c1').innerHTML='';
// 			cont1=1;
// 		}
//     }else{
// 		document.getElementById('c1').innerHTML='Pin no valido';
// 		cont1=2;
// 	}	
// }
function val(){
	if (cont2==1){
		document.getElementById('consultarCli').disabled=false;
		  }
	 else{
		 document.getElementById('consultarCli').disabled=true;
	 }
}

function validarformulario(){
	nombre= '#nomCli';
	apellido= '#apeCli';
	celular= '#celCli';
	correo= '#corCli';
	direccion= '#dirCli';

	bootstrapValidate(nombre, 'required: Campo obligatorio!|alpha: Solo se aceptan letras', function (isValid) {
		if (isValid) {
			boton= true;
		} else {
			boton= false;
		}
	 });

	 bootstrapValidate(apellido, 'required: Campo obligatorio!|alpha: Solo se aceptan letras', function (isValid) {
		if (isValid) {
			boton= true;
		} else {
			boton= false;
		}
	 });

	 bootstrapValidate(celular, 'required: Campo obligatorio!|numeric: Solo se aceptan numeros!', function (isValid) {
		if (isValid) {
			boton= true;
		} else {
			boton= false;
		}
	 });

	 bootstrapValidate(correo, 'required: Campo obligatorio!|email: Ingresa una direccion de correo valida', function (isValid) {
		if (isValid) {
			boton= true;
		} else {
			boton= false;
		}
	 });

	 bootstrapValidate(direccion, 'required: Campo obligatorio!', function (isValid) {
		if (isValid) {
			boton= true;
		} else {
			boton= false;
		}
	 });

	if(boton){
		registrarCliente();
	}else{
		return false;
	}
}


//mostrar productos
function MosPro(idCat){
	url = "index.php?accion=MosPro&idCat=" + idCat;
	
  $("#datos").load(url);

}

//ingredientes
function MostrarIngredientes(id){
	var url = "index.php?accion=MostrarIngredientes&id=" + id + "";
	$("#ingredientes").load(url);
}

ing = " "; 
function ingre(){
	    
        $(":checkbox[name=ingre]").each(function(){
			
            if (this.checked) {
                ing = $(this).val()+',';
            }
            
        });         
}

//comentarios
com = " ";
function comen(){
	com = document.getElementById("comen").value;
}


//consultar cliente en el modal
const consultarCliente = async (idpro) => {
	$.post("VO/consultarCliente.php",{	
	},async (cliente) => {	
		if(cliente == ""){
			$("#modalCli").modal("show");
		}else{
			Agregarproducto(idpro);
		}
	});
}

//registrar pedido
function Agregarproducto(idpro){

			Swal.fire({
				position: 'top-center',
				icon: 'success',
				title: 'Pedido eviado',
				showConfirmButton: false,
				timer: 1200
				})
				catid = $("#catid").val();
				cant = $("#cant"+idpro).val();
				$.post("index.php?accion=Agregarproducto",{
					idpro,cant
					
				},function(){
					
					if(cont==1){
						MosPro(catid);
						pedido(idpro);
						car();
					}else{
						MosPro(catid);
						regPed();
						pedido(idpro);
						car();
						
						cont=1;
						
					}
					
				});
		
	document.getElementById("btnpago").disabled=false;
	document.getElementById("btncuenta").disabled=false;
}

function pedido(idP){
	catid = $("#catid").val();
	cant = $("#cant"+idP).val();
		$.post("index.php?accion=pedido",{
			idP,cant,com,ing
			
		},function(){
			MosPro(catid);
			
		});
}
function regPed(){
	$.post("index.php?accion=regPed",{
		
		
	});
}

//calificacion
$("input[name=estrellas]").click(function() {
	cal = $(this).val();
	$.post("index.php?accion=califica",{
		cal
	});
	if(cal==1 || cal==2){
		document.getElementById('com').innerHTML="Ups...";
		document.getElementById('com').style.color="red";
	}
	if(cal==3){
		document.getElementById('com').innerHTML="Omg";
		document.getElementById('com').style.color="orange";
	}
	if(cal==4 || cal==5){
		document.getElementById('com').innerHTML="enhorabuena";
		document.getElementById('com').style.color="green";
	}
	
});


//botones cantidad del producto
function cantidad(operacion,idP){
	numero=$("#cant"+idP).val();
	if(numero<1){
		$('#cant'+idP).val("1");
		numero=$("#cant"+idP).val();
	}else{
		if(operacion=='1'){
			numero++;
			} else{
			numero--;
			}
	}
	$('#cant'+idP).val(numero);
}

//pedir cuenta
function cuenta(){
	Swal.fire({
		position: 'top-center',
		icon: 'info',
		title: 'En breves segundos será atendido',
		showConfirmButton: false,
		timer: 1200
	})
	var url = "index.php?accion=cuenta";
	$("#datos").load(url);
	document.getElementById('numero').innerHTML='0';
	recargarfactura();
}

//contador nav
function car(){
	var url = "index.php?accion=car";
	$("#numero").load(url);
}

//carrito de compras 
function carrito(){
	var url = "index.php?accion=carrito";
	$("#carrito").load(url);
}
function cue(){
	var url = "index.php?accion=cue";
	$("#cuenta").load(url);
}
function cancelar(idet){
	$.post("index.php?accion=cancelar",{
		idet
		
	},function(){
		carrito();
		car();
		
	});
}

//refrescar div
function recargarfactura(){
	var url = "index.php?accion=factura";
    var refreshId = setInterval(function() {
        var estado=$("#est").text();

        if(estado!="Pago" && estado!=undefined && estado!=""){
            $("#datos").load(url);
        }else{
			clearInterval(refreshId);
            window.location.assing("index.php");
        }
	}, 10000); 
	$.ajaxSetup({ cache: false });               
}







// $(document).ready(function($) {
    // $('#pedido').click(function() {
	// 	$('#modalPedido').modal('show');
    // });

//   });

// simpleCart({
//   cartColumns: [
// 	//   { attr: "id"}, 
// 	  { attr: "name", label: "Nombre"}, 
// 	  {attr: "size"}, 
// 	  { view: "currency", attr: "price", label: "Precio"},
// 	  {attr: "size"}, 
//       { attr: "quantity", label: "cant"},
// 	  {attr: "size"},
// 	  { view: "currency", attr: "total", label: "SubTotal" }
//   ],

//   cartStyle: "table", 

// });




//por si las moscas
	// $("input").click(function() {
	// 	var input2 = $(this).attr("id");
		
	// 	alert(input2);
	// });

	

