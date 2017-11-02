<?php 
require 'books.php';

$result2 = mysql_query($query2);
$rows = mysql_num_rows($result2);
for ($j = 0 ; $j < $rows ; ++$j)
{   
echo '<table class="Stable"> <td>'. mysql_result($result2,$j,'year'). '</td></table>';
}
?>