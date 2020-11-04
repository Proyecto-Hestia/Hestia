<?php
if ($result->rowCount() > 0) {
    while ($filas=$result->fetchObject()) {
        $id = $filas->id_pro;
    ?>

    <div class="form-group form-check" style="text-aling: left;">
        <input type="checkbox" class="form-check-input" value="<?php echo $filas->nom_ing;?>" name="ingre">
        <label class="form-check-label" for="exampleCheck1" style="font-family: 'Julius Sans One', sans-serif;"><?php echo $filas->nom_ing;?></label>
    </div>
 
    <?php
    }
}
?>
<button type="button" class="btn btn-danger" id="guar" onclick="ingre()"  data-dismiss="modal" style="left: 7em;">
<i class="far fa-check-circle"></i>
</button>
