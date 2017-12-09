<div style="text-align: center">
<form method="POST"  action="?view=product_history&action=create">
    <div>Data:</div><input type="date" name="date">
    <div >Prekė:</div>
    <select name="product_id">

    </select><br>
    <div >Vakarykštis likutis:</div><input type="number" name="initial">
    <div >Pagaminta:</div><input type="number" name="produced">
    <div >Parduota:</div>	<input type="number" name="sold">
    <div >Sugadinta:</div><input type="number" name="damaged">
    <div >Galutinis likutis:</div><input type="number" name="closed">
    <br><br><input type="submit" class="btn btn-secondary" value="Išsaugoti duomenis">
</form>
</div>
<?php
echo get_class_methods(\app\ProductController::class);
?>

<!--<a href="index.php">Gryžti i pradžią...</a>-->

