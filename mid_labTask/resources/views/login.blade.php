<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="" method="post">
	@csrf
	<table>
		<tr>
			<td>email</td>
			<td><input type="email" name="email" ></td>
		</tr>
		<tr>
			<td>password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Login"></td>
			<td><a href="{{route('registration.index')}}">signup</a></td>
		</tr>
	</table>
	</form>
	<br><br>
	@foreach($errors->all() as $error)
	{{$error}}<br>
	@endforeach

	{{session('msg')}}
	<table>
</body>
</html>