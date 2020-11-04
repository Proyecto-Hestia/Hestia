<?php
if(isset($_SESSION['id'])) {
  ?>
  <table style="width:95%; text-align:center;">
  <tr>
    <th>Nombre</th>
    <th>Precio</th>
    <th>Cantidad</th>
    <th>Subtotal</th>
    <th> </th>
  </tr>
  <?php
    $total=0;
    $proto=0;
    while ($filas=$result->fetchObject()) {
        $subtotal= $filas->cant * $filas->val_pro;
        $total = $total + $subtotal;
        $proto = $proto + $filas->cant;  
       
        
    ?>
    <tr>
    <td><?php echo $filas->nom_pro;?></td>
    <td><?php echo $filas->val_pro;?></td>
    <td><?php echo $filas->cant;?></td>
    <td><?php echo  $subtotal;?></td>
    <?php
    if($filas->est_det_ped=="Preparando"){
      ?>
       <td><i class="fas fa-clock" style="color:#F13401;"></i></td>
      <?php
    }elseif($filas->est_det_ped=="Atendido"){
      ?>
      <td> <i class="far fa-check-circle" style="color:green;"></i></td>
     <?php
    }else{
      ?>
    <td><button type="button" class="btn btn-outline-danger btn-sm" onclick="cancelar(<?php echo $filas->id_det_ped;?>)">
    <i class="fas fa-trash-alt"></i>
    </button></td>
    <?php
    }
    ?>
  </tr>
    <?php 
   $_SESSION["prot"] = $proto;
   $_SESSION["tot"]=$total;
    }
   
   
  }else{ 
    ?>
    <p>Carrito Vacio</p>
    
    <?php
     
  } 
?>

 
</table>
