@extends ('layouts.app')
@section ('title', 'Create')
@section ('content')
    
<form action="/items" method="Post" enctype="multipart/form-data">		
            @csrf 
          
                <strong>Image</strong> <br>
            	<input type="url" name= "image" placeholder="Image">
                <br><br>
                <strong>Name</strong><br>
              
            	<input type="text" name= "name" placeholder="Name">
                <br><br>
            
                <strong>Detail</strong> <br>
            	<input type="text" name= "detail" placeholder="Detail">
                <br><br>    
                
                <button type="submit">
                    Update
                </button>

                </form> 
                
                         
             
  
                

@endsection	