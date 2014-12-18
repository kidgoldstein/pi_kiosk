<!DOCTYPE html>
<html>
    <header>
        <title>Raspberry Pi Build</title>
		<link href="Content/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="sitePi.css" rel="stylesheet"/>
    </header>
    <body>
	<?php 

		$command = 'pyscript.py';
		exec($command, $output, $return_code);
		//var_dump($output);
		if($return_code === 0)
		{
			for($i=1; $i<sizeOf($output); $i++)
				echo $output[$i];
		}
		else
			echo $return_code;
	?>
    </body>
</html>