@extends ('layouts.app')
@section ('title', 'Items')
@section ('content')


      <div class= "content">
            <img src="/images/laravel.jpg" alt="">
            <h1>Items</h1>
      </div>



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