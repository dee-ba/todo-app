<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
        <!-- <form action="/edit" method="Post">		
            @csrf 
            	<input type="hidden" name= "id" value= "{{ $item['id']}}"> -->
                
            <form action="/edit" method="Post">		
            @csrf 
                <input type="hidden" name="id"  value="{{$item['id']}}"> 
                <br><br>


                <strong>Image</strong> <br>
            	<input type="text" name= "image" value= "{{ $item['image']}}">
                <br><br>
            
                <strong>Name</strong> <br>
            	<input type="text" name= "name" value= "{{ $item['name']}}">
                <br><br>
                
                <strong>Detail</strong> <br>
            	<input type="text" name= "detail" value= "{{ $item['detail']}}">
                <br><br>     
                
                         
                <br><br><br>
  
                <button type="submit">
                    Update
                </button>

</body>
</html>