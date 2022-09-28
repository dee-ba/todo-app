@extends ('layouts.app')
@section ('title', 'View')
@section ('content')



  <div class="mt-20 ml-15 mb-6" >		
    <a href="/index" class="bg-red-400 text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">List of Items</a>
  </div>


  <div class="max-w-sm rounded overflow-hidden shadow-lg">
    <img width= "500px" src="{{ $item->image }}">
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2">{{$item->name}}</div>
          <p class="text-gray-700 text-base">
          {{$item->detail}}
          </p>
      </div>
  
  </div>



@endsection	