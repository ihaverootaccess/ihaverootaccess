<?php
require 'books.php';

$result1 = mysql_query($query1);
$rows = mysql_num_rows($result1);
for ($i = 0 ; $i < $rows ; ++$i)
{   
echo '<table class="Stable"> <td>'. mysql_result($result1,$i,'subject'). '</td></table>';
}

?>