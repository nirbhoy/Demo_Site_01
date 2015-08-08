<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Untitled Document</title>
	</head>

	<body bgcolor="#6B79FF">
		<form action="procees.php" method="post"> 
			<table bgcolor="84E869" width="613" height="326" border="1" align="center" cellpadding="0" cellspacing="0">
				<tr>
					<td colspan="2" align="center"  bgcolor="#669966"><h1>Grading System</h1></td>
				</tr>
				<tr>
					<td width="235" align="center">Subject</td>
					<td width="372" align="center">Marks</td>
				</tr>
				<tr>
					<td align="center">Math</td>
					<td align="center"><input type="text" name="math" required/></td>
				</tr>		  
				<tr>
					<td align="center">English</td>
					<td align="center"><input type="text" maxlength="2" name="eng" id="eng" required/></td>
				</tr>		  		  
				<tr>
					<td align="center">Bangla</td>
					<td align="center"><input type="text" name="bang" id="bang" required/></td>
				</tr>		  
				<tr>
					<td align="center">Computer</td>
					<td align="center"><input type="text" name="cmt" id="cmt" required/></td>
				</tr>		  
				<tr>
					<td align="center">Science</td>
					<td align="center"><input type="text" name="science" id="science" required/></td>
				</tr>
				<tr>
					<td align="center"><input type="submit" value="Result" name="sub"/></td>
					<td align="center"><input type="reset" value="Reset"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>