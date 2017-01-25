<?php
print"<table border='2' width='200'>";
$a=0;
for($j=1;$j<=3;$j++)
{print"<tr>";
for($i=1;$i<=5;$i++)
{print"<td>";
print$a+$i;
print"</td>";
}
print"<br>";
$a=$a+5;
print"</tr>";
}
print"</table>";
?>