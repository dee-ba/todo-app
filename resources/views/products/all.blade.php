<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>All Products</h1>


<table class="table table-hover table-responsive-sm border p-5 mb-5">
 
 <tr style="background-color: #B58D7B; color:white">
   <th scope="col">ID</th>
   <th scope="col">Name</th>
   <th scope="col">Detail</th>
   <th scope="col" style="width:100px";>Image</th>
   <th scope="col">Price</th>
   <th scope="col">Created At</th>
   <th scope="col">Updated At</th>
 </tr>

@foreach($products as $product)
<tr>
 <td>{{$product->id}}</td> 
 <td>{{$product->name}}</td>
 <td>{{$product->detail}}</td>
 <td> <img src="{{ $product->image }}"></td>
 <td>{{$product->price}}</td>
 <td>{{$product->created_at}}</td>
 <td>{{$product->updated_at}}</td>
 

</tbody>
@endforeach
</table>
 
		
			
	
</body>
</html>



