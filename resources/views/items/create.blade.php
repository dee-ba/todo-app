@extends ('layouts.app')
@section ('title', 'Create')
@section ('content')


<form action="/items" method="Post" enctype="multipart/form-data">		
            @csrf 
          
                <strong>Image</strong> <br>
            	<input type="text" name= "image" placeholder="image url here">
                <br><br>
                <strong>Name</strong><br>
              
            	<input type="text" name= "name" placeholder="name item here">
                <br><br>
            
                <strong>Detail</strong> <br>
            	<input type="text" name= "detail" placeholder="more info here..">
                <br><br>    
                
                <button type="submit">
                    Update
                </button>

                </form> 
                
                         
             
  
                

@endsection	