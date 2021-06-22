<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    
	<table border="1" align="center" width="100%">
		<tr height="100px">
			 <td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			
 			<td align="right">
 				Logged in as {{session('uname')}} |
 				<a href="{{ route('logout') }}">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="400px">
	 		<td></td>
	 		<td><h3>Welcome to customer dashboard</h3></td>
	 	</tr>
		<tr height="50px">
			<td colspan="3" align="center">
				copyright@2021
			</td>
		</tr>
	</table>
</body>
</html>