<?php 
	switch ($_GET['opc']) {
		case 'diagnosticar':  diagnosticarEnfermedadProlog(); break;
	}
	
	function diagnosticarEnfermedadProlog(){
		$sintomasArreglo = $_POST['sintomas'];
		$enfermedad = `swipl -s seic.pl -g "test($sintomasArreglo)." -t halt.`;
		echo json_encode($enfermedad);
	}
 ?>