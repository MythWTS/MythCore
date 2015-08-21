<?php
require_once 'Core.inc';
#########################################################################################################################
if(isset($_GET['cmd'])){
	switch($_GET['cmd']){
		case 'Test':
			$module = str_replace('-', "\\", $_GET['module']);
			$className = "\\Test\\{$_GET['package']}\\{$module}\\{$_GET['test']}";
			if(class_exists($className)){
				$test = new $className();
				$test->Run();
				echo "\n<h3 style='color: #ffcccc;'><a href='/'>Back</a></h3>\n";
			}
			else{
				echo "<h1 style='color: #ff0000; font-size: 80px; text-align:center;'>No such test exists! ... yet :)</h1>";
			}
			break;
		case 'Sample':
			echo "<h1 style='color: #ff0000; font-size: 80px; text-align:center;'>"; 
			echo "Samples ...<br/>Coming Soon ....<br/>We hope!</h1>\n";
			echo "<h2 style='color: #000088; font-size: 45px; text-align:center;'>";
			echo "Currently ... no sample named <i>{$_GET['name']}</i> exists!";
			break;
	}
}
else{
	$el = "\n";
	echo '<h3>Core\IO Tests</h3>'.$el;
	echo "<ul>\n";
	echo '<li><a href="/Test/IO/Core/Streams">Streams Basic Tests </a></li>' . $el;
}
?>