<?php
if(isset($_REQUEST['e'])){ ?>
<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
    <strong>Felicitaciones!</strong> El evento fue registrado correctamente.
</div>
<?php } ?>

<?php
if(isset($_REQUEST['ea'])){ ?>
<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
    <strong>Felicitaciones!</strong> El evento fue actualizado correctamente.
</div>
<?php } ?>

<?php
if(isset($_REQUEST['de'])){ ?>
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    <strong>Felicitaciones!</strong> El evento fue borrado correctamente.
</div>
<?php } ?>



