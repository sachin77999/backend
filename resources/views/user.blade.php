<h1>This is user page</h1>
<?php print_r($data);  ?>
{{$data['name']}}

<h1>User Login</h1>
<form action="users"method="POST">
@csrf
<input type="text"name="user"placeholder="enter name"><br><br>
<input type="password"name="user"placeholder="enter your password"><br><br>
<button type="submit">Login</button>
</form>
<html>
<head>
<title>
Form tutorial
</title>
</head>
<body>
<div>

</div>
<form action="usercontroller"method="POST">
@csrf
<input type="text"name="user"><br><br>
<input type="text"placeholder="phone"name="phone"><br><br>
<input type="password"name="password">
@error('password')
<div>{{$message}}</div>
@enderror
<br><br>
<button type="submit">Submit</button>
</form>
</body>
</html>