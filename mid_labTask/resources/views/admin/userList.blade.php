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
             <h3>User List</h3>
            <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>username</th>
                        <th>Email</th>
                        <th>type</th>
                        <th>Action</th>
                    </tr>
                    
                    @foreach($userlist as $user)
                    <tr>

                        
                        <td>{{$user->id}}</td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->type}}</td>
                        <td>
                            
                        <!-- <a href="/user/userList/detsils/{{$user->id}}">details</a> | -->
                            <a href="/user/edit/{{$user->id}}">Edit</a> |
                            <a href="/user/delete/{{$user->id}}">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </table>
             
             </td>
	 	</tr>
	</table>
</body>
</html>