<?php
    print "<li>
		  	<a href=\"index.php\" class=\"\">Ver</a>
		  </li>
		  <li>
		  	<a href=\"inventario.php\" class=\"\">Inventario</a>
		  </li>";
    if ($_SESSION['roleus'] == 'admin') {
        print "<li><a href=\"registrar.php\" class=\"\">Registrar</a></li>
            <li>
                <a href=\"modificar.php\" class=\"\">Modificar</a>
            </li>
            <li>
                <a href=\"eliminar.php\" class=\"active\">Eliminar</a>
            </li>";
    }
?>