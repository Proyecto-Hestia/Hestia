<?php
	if($result>0){
        ?>
        <script>
            Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: 'Bienvenido',
            showConfirmButton: false,
            timer: 1200
            })
            $("#modalCli .close").click();
        </script>
        <?php
    }else{
        ?>
        <p>Por favor registrarse</p>
        <script>
        $('#datoc').show();
        validarformulario();
        
        </script>
    <?php
    }
?>