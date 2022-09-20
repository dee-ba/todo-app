@extends ('layouts.app')
@section ('title', 'View')
@section ('content')



    <table>
        <tr>
            <td> <strong> {{$item->name}} </strong> </td> 
        </tr> 

        <tr>
           <td> {{$item->detail}} </td> 
        </tr>         
         
        <tr>
            <td><img width= "500px" src="{{ $item->image }}"></td>
        </tr>

         
  
      </table>







@endsection	