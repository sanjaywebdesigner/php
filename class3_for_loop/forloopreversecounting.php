<?php
print"<table border='2' width='600'>";
$a=0;
for($j=1;$j<=3;$j++)
{print"<tr>";
for($i=1;$i<=5;$i++)
{print"<td>";
$k=$a-$i;
print $k;
print"</td>";
}
print"<br>";
$a=$a+11;
print"</tr>";
}
print"</table>";
?>