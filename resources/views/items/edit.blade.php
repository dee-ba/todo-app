@extends ('layouts.app')
@section ('title', 'Edit')
@section ('content')
    
        <!-- <form action="/edit" method="Post">		
            @csrf 
            	<input type="hidden" name= "id" value= "{{ $item['id']}}"> -->
                
            <form action="/edit" method="Post">		
            @csrf 
                <input type="hidden" name="id"  value="{{$item['id']}}"> 
                <br><br>


                <strong>Image</strong> <br>
            	<input type="file" name= "image" value= "{{ $item['image']}}">
                <br><br>
            
                <strong>Name</strong> <br>
            	<input type="text" name= "name" value= "{{ $item['name']}}">
                <br><br>
                
                <strong>Detail</strong> <br>
            	<input type="text" name= "detail" value= "{{ $item['detail']}}">
                <br><br>     


                <button type="submit">
                    Update
                </button>
                
            </form> 

           
  
                

@endsection	