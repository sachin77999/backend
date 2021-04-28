<h1>Add Member</h1>
@if(session('user'))
<h3 style="color:green">{{session('user')}}user has been added</h3>
@endif
<form action="addmember"method="POST">
@csrf 
<input type="text"name="user"placeholder="Enter User Name"><br>
<input type="password"name="password"placeholder="Enter user Password"><br>
<input type="text"name="email"placeholder="Enter User email"><br>
<button>Add Member</button>
</form>