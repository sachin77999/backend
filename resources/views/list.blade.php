<h1>Member List</h1>
<table border="1">
<tr>
<td>id</td>
<td>name</td>
<td>member_id</td>
<td>email</td>
<td>address</td>
</tr>
@foreach($devicess as $item)
<tr>
<td>{{$item['id']}}</td>
<td>{{$item['name']}}</td>
<td>{{$item['member_id']}}</td>
<td>{{$item['email']}}</td>
<td>{{$item['address']}}</td>
<td><a href={{"delete/".$item['id']}}>Delete</a>
<a href={{"edit/".$item['id']}}>edit</a>

</td>
</tr>
@endforeach
@foreach($devicess as $item)
<tr>
<td>{{$item->id}}</td>
<td>{{$item->name}}</td>
<td>{{$item->member_id}}</td>
<td>{{$item->email}}</td>
<td>{{$item->address}}</td>
</tr>
@endforeach
</table>