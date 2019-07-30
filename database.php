<?php
	$conexion = new mysqli("localhost","root","garcialopez","jamaica");

	if ($conexion) {
        # code...
	}else{
		echo'<script type="text/javascript"> 
    	alert("Error de conexion");
    	window.location.href="indexInsertar.html";
    </script>';
	}
?> 