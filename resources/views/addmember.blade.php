<h1>Add Members</h1>
<form action="add"method="POST">
@csrf 
<input type="text"name="name"placeholder="Enter Name"><br><br>
<input type="password"name="member_id"placeholder="Enter your member_id"><br><br>
<input type="text"name="email"placeholder="Enter your email"><br><br>
<input type="text"name="address"placeholder="Enter your address"><br><br>
<button type="submit">Add Member</button>

</form>