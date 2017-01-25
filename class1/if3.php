<html>
<body>
<?php
$a=date("D");
echo $a;
echo"<br>";
if($a=="Sun")
{
	echo "today is sunday";
	}
elseif($a=="Mon")
{
	echo "today is monday";
	}
	elseif($a=="Tue")
{
	echo "today is tuesday";
	}
	elseif($a=="Wed")
{
	echo "today is wednusday";
	}
	elseif($a=="Thu")
{
	echo "today is thursday";
	}
	elseif($a=="Fri")
{
	echo "today is friday";
	}
	else
	{
		echo "today is Saturday";
	}
?>
</body>
</html>
