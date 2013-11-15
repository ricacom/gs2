<?php
include realpath(dirname(__FILE__)) . '/../inc/init.php';

//echo $_GET['estado'];
if(isset($_GET['estado'])){
	$state = (int) $_GET['estado'];
//	echo $state;
	

	try {

		$result 	= $gsdb->query('SELECT * FROM cities WHERE id_uf = %i', $state);
		echo '<select name="cidade"  class="form-control input">';
		
		foreach ($result as $r) {
			echo '<option value="' .$r['id_cidade'] .'"> ' .$r['nome'] .'</option>';
		}
			echo "</select>";  
		
	} catch (fExpectedException $e) {
		    echo $e->printMessage();
	}
	
}