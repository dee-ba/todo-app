@extends ('layouts.app')
@section ('title', 'View')
@section ('content')


<h1>Hello</h1>




<table>
            <tr>
              <th>Checkbox</th>
              <th>Image</th>
              <th>Name</th>   
              <th>Detail</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>

           
            <tr>
              <th width="50px"><input type="checkbox"></th>
              </th>
              <td><img width= "100px" src="{{ $item->image }}"></td>
              <td>{{$item->name}}</td>
              <td>{{$item->detail}}</td>

              <td> 		
                  <button>
                      <a href="{{'view/' .$item['id'] }}">View</a>
                  </button>
              </td>

              <td> 		
                  <button>
                      <a href="{{'edit/' .$item['id'] }}">Edit</a>
                  </button>
              </td>
              <td>
                <button>
                    <a href="{{'delete/' .$item['id'] }}"> Delete </a>
                </button>
              </td>
            
            
      </table>







@endsection	