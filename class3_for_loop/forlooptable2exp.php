<head>
<style>
.aa{background-color:green;}
</style>
</head>
<?php
print"<table border='2' width='600'>";
$a=0;
for($j=1;$j<=3;$j++)
{print"<tr>";
for($i=1;$i<=5;$i++)
{print"<td class='aa'>";
$k=$a+$i;
print"<img src='image".$k.".jpg'>";
print"</td>";
}
print"<br>";
$a=$a+5;
print"</tr>";
}
print"</table>";
?>