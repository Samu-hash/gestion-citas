<?php 


$controllers=array(
	'cita'=>['landing','add','save','show','updateshow','update','delete','search','error']
);

if (array_key_exists($controller,  $controllers)) {
	if (in_array($action, $controllers[$controller])) {
		call($controller, $action);
	}
	else{
		call('cita','error');
	}		
}else{
	call('cita','error');
}

function call($controller, $action){
	require('Controllers/'.$controller.'Controller.php');

	switch ($controller) {
		case 'cita':
		require('Models/cita.php');
		$controller= new CitaController();
		break;			
		default:
				# code...
		break;
	}
	$controller->{$action}();
}

?>