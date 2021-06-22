<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<h2>Registration</h2><br>
	<form action="" method="post">
	<table> 
    @csrf
		<tr>
			<td>Full Name</td>
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
			<td>password</td>
			<td><input type="password" name="password" ></td>
		</tr>
        <tr>
			<td>city</td>
			<td><input type="text" name="city" ></td>
		</tr>
        <tr>
			<td>Country</td>
			<td><input type="text" name="country" ></td>
		</tr>
        <tr>
			<td>Company Name</td>
			<td><input type="text" name="CompanyName" ></td>
		</tr>
        <tr>
			<td>phone</td>
			<td><input type="text" name="phone" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Sign In"></td>
            <td><p>Already have an account?</p><a href="{{route('login.index')}}">Sign In</a></td>
		</tr>
    <table>
	</form><br><br>
    @foreach($errors->all() as $error)
	{{$error}}<br>
	@endforeach
{{session('msg')}}
	
</body>
</html>