<?php
//Header setting to export text data into excel.
header("Pragma: public"); 
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=DATA_EXPORT.xls");

include "config/connect.php";

//Write your SQL here
$sql = mysqli_query($mysqli,"SELECT dni, nombres, apellidos,fecha_tramite,categoria,estado FROM usuarios ORDER BY id_usarios");

//This part generate your SQL result into table
echo "<table border='1'>\n";
$cols = mysqli_num_fields($sql);
$ncols = $cols - 1;
echo "<tr>\n";
for ($i = 0; $i <= $ncols; ++$i) {
    $colname = mysqli_fetch_field_direct($sql, $i);
    echo "  <th><b>".htmlentities($colname->name, ENT_QUOTES)."</b></th>\n";
}
echo "</tr>\n";

while (($row = mysqli_fetch_array($sql, MYSQLI_ASSOC)) != false) {
     echo "<tr>\n";
     foreach ($row as $therow) {
          echo "  <td>".(htmlentities($therow, ENT_QUOTES))."</td>\n";
     }
    echo "</tr>\n";
}
echo "</table>\n";
?>
