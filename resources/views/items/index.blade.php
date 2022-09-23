@extends ('layouts.app')
@section ('title', 'Index')
@section ('content')


      <table>
            <tr class="text-blue-500 border">
              <th>Check</th>
              <th>Image</th>
              <th>Name</th>   
              <th>Detail</th>
              <th></th>
              <th></th>
              <th></th>
            </tr>

            @foreach($items as $item)
            <tr class="text-blue-500 border">
              <th width="50px"><input type="checkbox"></th>
              </th>
              <td><img width= "100px" src="{{ $item->image }}"></td>
              <td width= "150px">{{$item->name}}</td>
              <td width="350px">{{$item->detail}}</td>

              <td width= "150px"> 		
                  <button>
                      <a href="{{'view/' .$item['id'] }}">View</a>
                  </button>
              </td>

              <td width= "150px"> 		
                  <button>
                      <a href="{{'edit/' .$item['id'] }}">Edit</a>
                  </button>
              </td>
              <td width= "150px">
                <button>
                    <a href="{{'delete/' .$item['id'] }}"> Delete </a>
                </button>
              </td>
            @endforeach
            
      </table>



@endsection	