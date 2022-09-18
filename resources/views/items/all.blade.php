<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Items</title>
    <link rel="stylesheet" href="css/style.css">

  
    
</head>
<body>

        <div class= "content">
            <img src="/images/laravel.jpg" alt="">
        
            <h1>Items</h1>
        </div>
<!-- Table -->
            <table>
            
                <tr>
                  <th>Name</th>   
                  <th>Detail</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>

                @foreach($items as $item)

                <tr>

                  <td>{{$item->name}}</td>
                  <td>{{$item->detail}}</td>
            
            
<!-- Edit -->
                  <td> 		
                      <button>
                          <a href="{{'edit/' .$item['id'] }}">Edit</a>
                      </button>
                  </td>
            
<!-- Delete -->
                  <td>
                    <button>
                        <a href="{{'delete/' .$item['id'] }}"> Delete </a>
                    </button>
                  </td>


                @endforeach
                
              </table>
 
             
			
	
</body>
</html>



