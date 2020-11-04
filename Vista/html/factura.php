
<?php 

    $filas=$result->fetch()
    
?>

<div id="containerrr"> 
    <div><h1 class="fact">FACTURA</h1></div>

   
    <div class="row">
        <div>
            <table style="width:95%; text-align:center;" class="factu">

                <tr>
                    <th style="font-weight: bold;">Numero de factura</th>
                    <th style="font-weight: bold;">Fecha y hora</th>
                    <th style="font-weight: bold;">Nombre</th>
                    <th style="font-weight: bold;">Apellido</th>
                    <th style="font-weight: bold;">Numero de identificacion</th>    
                </tr>

                <tr>
                    <td><?php echo $filas['id_ped'] ?></td>
                    <td><?php echo date("Y-m-d H:i:s"); ?></td>
                    <td><?php echo $filas['nom_cli'] ?></td>
                    <td><?php echo $filas['ape_cli'] ?></td>
                    <td><?php echo $filas['cli_id'] ?></td> 
                </tr>
            </table>
            <table style="width:95%; text-align:center;" class="factu">
                <tr>
                    <th style="font-weight: bold;">Unidades</th>
                    <th> </th>
                    <th style="font-weight: bold;">Nombre del producto</th>
                    <th> </th>
                    <th style="font-weight: bold;">Valor</th>
                    
                </tr>
                <?php 
                $total=0;
                while ($filas = $result2->fetchObject()) {
                   
                    $subtotal= $filas->cant * $filas->val_pro;
                    $total=$total + $subtotal;
                ?>
                <tr>
                    <td><?php echo $filas->cant ?></td>
                    <td> </td>
                    <td><?php echo $filas->nom_pro ?></td>
                    <td> </td>
                    <td><?php echo $filas->val_pro ?></td>
                    <?php
                    if($filas->est_ped =="Pago"){
                        header("location:index.php?accion=cerrarcliente");

                    }
                    ?> 
                </tr>
                <tr>
                    <div id="est">
                        <td colspan="2" style="font-weight: bold;">Estado</td>
                        <td><?php echo $filas->est_ped ?></td>
                    </div>
                   
                </tr>
                <?php 
                    }
                ?>

                <tr>
                    <td colspan="2" style="font-weight: bold;">Total</td>
                    <td><?php echo $total ?></td>
                </tr>
           
              
            </table>
            
        </div>            

    </div>
</div>
