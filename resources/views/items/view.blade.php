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


            @foreach($items as $item)
           
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
            @endforeach
      </table>







@endsection	