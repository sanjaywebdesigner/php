<html>
<body>
<?php
$hindi=45;
$engish=56;
$computer=67;
$math=84;
$total=$hindi+$engish+$computer+$math;
$per=$total/4;
echo $total."<br>";
echo $per."<br>";
if($total<200)
{echo "you are fail"."<br>";
	}
	else if ($total>=200 && $total<300)
	{echo "you are pass"."<br>"."your grade is C";
	}
	else if (total>=300&& total<350)
	{echo "you are pass"."<br>"."your grade is b";}
	else
	{echo "you are pass"."<br>"."your grade is a";
	}

?>
</body>
</html>

