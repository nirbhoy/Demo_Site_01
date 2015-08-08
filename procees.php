<?php
	
	$math1=$_POST['math'];
	$eng1=$_POST['eng'];
	$ban1=$_POST['bang'];
	$cmt1=$_POST['cmt'];
	$science1=$_POST['science'];
	
	function grade($name)
	{
			if($name>=80 and $name<=100)
			{
				$g='<div style=background-color:green;>A+</diV>';
				$p='<div style=background-color:green;>4.00</div>';
				$t=array($g,$p);
				return $t;
			}
			else if($name>=70 and $name<=79)
			{
				$g='A';
				$p='3.75';
				$t=array($g,$p);
				return $t;
			}
			else if($name>=60 and $name<=69)
			{
				$g='A-';
				$p='3.50';
				$t=array($g,$p);
				return $t;
			}
			else if($name>=50 and $name<=59)
			{
				$g='B+';
				$p='3.00';
				$t=array($g,$p);
				return $t;
			}
			else if($name>=40 and $name<=49)
			{
				$g='B';
				$p='2.00';
				$t=array($g,$p);
				return $t;
			}
			else if($name>=0 and $name<=39)
			{
				$g='<div style=background-color:red;>F</div>';
				$p='<div style=background-color:red;>0.00</div>';
				$t=array($g,$p);
				return $t;
			}
			else
			{
				$g='Limit Cross';
				$p='0.00';
				$t=array($g,$p);
				return $t;
			}
	}
			$math=grade($math1);			
			$eng=grade($eng1);
			$ban=grade($ban1);
			$cmt=grade($cmt1);
			$science=grade($science1);
			if(($math[1]=='0.00') || ($eng[1]=='0.00') || ($ban[1]=='0.00')|| ($cmt[1]=='0.00') || ($science[1]=='0.00') )
			{
				$gpa='F';	
			}
			else
			
			$gpa=($math[1]+$eng[1]+$ban[1]+$cmt[1]+$science[1])/5;
			//$gpat=round($gpa,"2");

	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>

	<body bgcolor="#6B79FF">

		<table bgcolor="#84E869" width="613" height="326" border="1" align="center" cellpadding="0" cellspacing="0">
		  <tr>
			<td colspan="5" align="center"  bgcolor="#669966"><h1>Grading System</h1></td>
			</tr>
		  <tr>
			<td width="235" align="center">Subject</td>
			<td width="372" align="center">Marks</td>
			<td width="372" align="center">Grade</td>
			<td width="372" align="center">Point</td>
			<td width="372" align="center">GPA</td>
		  </tr>
		  <tr>
			<td align="center">Math</td>
			<td align="center"><?php echo $math1;?></td>
			<td align="center"><?php echo $math[0];?></td>
			<td align="center"><?php echo $math[1];?></td>
			<td align="center">&nbsp;</td>
		  </tr>
		  
		   <tr>
			<td align="center">English</td>
			<td align="center"><?php echo $eng1;?></td>
			<td align="center"><?php echo $eng[0];?></td>
			<td align="center"><?php echo $eng[1];?></td>
			<td align="center">&nbsp;</td>
		  </tr>
		  
		  
		   <tr>
			<td align="center">Bangla</td>
		   <td align="center"><?php echo $ban1;?></td>
			<td align="center"><?php echo $ban[0];?></td>
			<td align="center"><?php echo $ban[1];?></td>
			<td align="center"><?php echo $gpa; ?></td>
		  </tr>
		  
		   <tr>
			<td align="center">Computer</td>
		   <td align="center"><?php echo $cmt1;?></td>
			<td align="center"><?php echo $cmt[0];?></td>
			<td align="center"><?php echo $cmt[1];?></td>
			<td align="center">&nbsp;</td>
		  </tr>
		  
		  
		   <tr>
			<td align="center">Science</td>
		   <td align="center"><?php echo $science1;?></td>
			<td align="center"><?php echo $science[0];?></td>
			<td align="center"><?php echo $science[1];?></td>
			<td align="center">&nbsp;</td>
		  </tr>
		  <tr>
			<td align="center" colspan="5"><input type="submit" value="Back" onclick="history.go(-1)"/></td>
			
		  </tr>
		</table>

	</body>
</html>