<?php
// Conectando, seleccionando la base de datos
$link = mysql_connect('localhost', 'root', 'root')
    or die('No se pudo conectar: ' . mysql_error());
echo 'Connected successfully';
mysql_select_db('mibase') or die('<h1>No se pudo seleccionar la base datos</h1>');
// Realizar una consulta MySQL
$query = 'SELECT * FROM usuario';
$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

// Imprimir los resultados en HTML
echo "<table>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberar 
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);
?>