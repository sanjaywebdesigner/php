<html>
<body>
<?php
print "<center>";
print "Multiplication Table in table";
$str="<TABLE BORDER=1>";
for($i=1;$i<=10;$i++)
{
	$str.="<tr>";
	for($j=1;$j<=10;$j++)
	{
		$str.="<td>".($i*$j)."</td>";
	}
	$str.="</tr>";
}
$str.="</TABLE>";
print $str;
print "</center>";
	
	
		

?>
</body>
</html>
