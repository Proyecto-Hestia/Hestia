
  <?php
    $proto=0;
    while ($filas=$result->fetchObject()) {
        $proto = $proto + $filas->cant;  
}
?>
<p><?php echo $proto;?></p>