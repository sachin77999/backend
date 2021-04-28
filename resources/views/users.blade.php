
<h1>Hello from view</h1>
<h1>User Login</h1>
<table>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Profile Photo</td>
</tr>
<tr>
<td>ID</td>
<td>Name</td>
<td>Email</td>
<td>Profile Photo</td>
</tr>

</table>
//<form action="users"method="POST">
//@csrf
//<input type="text"name="username"placeholder="enter user id" /><br><br>
//<input type="password"name="userpassword"placeholder="enter user password" /><br><br>
//<button type="submit">Login</button>
//</form>
@extends('layout')

@section('title','User page');

@section('header')
@parent
@endsection
@section('content','User page coming from user page');
@section('footer')
@parent
@endsection