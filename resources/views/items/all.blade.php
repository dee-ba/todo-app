<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
</head>
<body>
    <h1>All Items</h1>


<table class="table table-hover table-responsive-sm border p-5 mb-5">
 
 <tr style="background-color: #B58D7B; color:white">
   <th scope="col">ID</th>
   <th scope="col">Name</th>
   

 </tr>

@foreach($items as $item)
<tr>
 <td>{{$item->id}}</td> 
 <td>{{$item->name}}</td>
 


</tbody>
@endforeach
</table>
 
		
			
	
</body>
</html>



