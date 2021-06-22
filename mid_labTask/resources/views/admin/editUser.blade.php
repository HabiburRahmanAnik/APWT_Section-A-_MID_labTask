<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
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
                    {{-- <li><a href="userList.php">View user list</a></li> --}}
                    {{-- <li><a href="{{ route('product.addProductView') }}">Add Product</a></li>
				    <li><a href="{{ route('product.upcomingProduct') }}">existing Product</a></li>
				    <li><a href="{{ route('product.existingProduct') }}">Upcoming Product</a></li> --}}
                </ul>
            </td>
            <td>
                <h2>Edit User</h2>
                <form method="post">
                   {{ csrf_field() }}
                    <table> 
                        <tr>
                            <td>Name</td>
                            <td><input type="text" name="name" value="{{$user->name}}"></td>
                        </tr>
                        <tr>
                            <td>username</td>
                            <td><input type="text" name="username" value="{{$user->username}}" ></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td><input type="email" name="email" value="{{$user ->email}}"></td>
                        </tr>
                        <tr>
                            <td>phone</td>
                            <td><input type="text" name="phone" value="{{$user ->phone}}"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="submit" value="sumit"></td>
                        </tr>
                    <table>
            </form>

            </td>
</body>
</html>