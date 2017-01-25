<html>
<body>
<?php
$salary=1200000;
$taxable=$salary-200000;
$tax1=$taxable*.1;
$tax2=$taxable*.2-30000;
$tax3=$taxable*.3-110000;
if($salary<=200000)
{echo "your taxable amount is nil";
	}
	else if ($salary>200000 && $salary<=500000)
	{echo "your taxable amount is ".$tax1;
	}
	else if ($salary>500000 && $salary<=1000000)
	{echo "your taxable amount is ".$tax2;
	}
	else
	{echo "your taxable amount is ".$tax3;
	}


?>
</body>
</html>

