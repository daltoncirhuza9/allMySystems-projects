<?php
//Valid options . A whitelist of allowed options.
$vegetableOptions= array('tomato','carrot','onion','Chilly');
//Empty array by default.
$vegetables = array();
//If the POST variable “vegetables” is a valid array.
If(!empty($_POST['vegetables']) && is_array($_POST['vegetables'])){
//Loop through the array of checkbox values.
Foreach($_POST['vegetables'] as $vegetables){
//Make sure that this option is a valid one.
If(in_array($vegetable, $vegetableOptions)){
//Add the selected options to our $vegetables array.
$vegetables[]=$vegetable;
}
}
}
Var_dump($vegetables);
?>
<form action=””method=”post”>
<label>
Tomatoes
<input type=”checkbox” name=”vegetables[]” value=” Carrot”>
<label>
<label>
Onions
<input type=”checkbox” name=”vegetables[]” value=”Onions>
</label>
<label>
Chillies
<input type=”checkbox” name=”vegetables[]” value=”Chillies”>
</label>
<input type=”submit” value=”Register”>
</form>