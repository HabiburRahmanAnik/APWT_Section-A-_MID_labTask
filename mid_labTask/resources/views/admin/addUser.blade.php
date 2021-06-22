<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>

    <table border="1" align="center" width="100%">
 		<tr height="100px">
 			<td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
 			<td align="right">
 				Logged in as |
 				<a href="../controller/logout.php">Logout</a>
 			</td>
	 	</tr>
	 	<tr height="400px">
	 		<td width="300px">
	 			<ul>
					<li><a href="{{route('admin.index')}}">Dashboard</a></li>
					<li><a href="{{route('admin.addIndex')}}">Add User</a></li>
					<li><a href="userList.php">View user list</a></li>
					<li><a href="addProductCategory.php">Add Product Category</a></li>
					<li><a href="productCategoryList.php">Product category list</a></li>
					<li><a href="addTools.php">Add tools</a></li>
					<li><a href="viewTools.php">view tools</a></li>
					<li><a href="news.php">News</a></li>
					<li><a href="viewProfile.php">View Profile</a></li>
	 			</ul>
	 		</td>
	 		<td>
         <form action="" method="post">
            {{csrf_field()}}
                 <table>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" ></td>
                        </tr>
                        <tr>
                            <td>username</td>
                            <td><input type="text" name="username" ></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><input type="email" name="email" ></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input type="password" name="password" ></td>
                        </tr>
                        <tr>
                            <td>type</td>
                            <td>
                                <select name="type" >
                                <option value="admin">admin</option>
                                <option value="customer">customer</option>
                                <option value="accoutant">accoutant</option>
                                <option value="seles">seles</option>
                                
                                </select>
                            </td>
                        </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="sumit"></td>
                </tr>
            <table>
	    </form>
    </td>
	</tr>
		
	</table>
</body>
</html>