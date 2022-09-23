@extends ('layouts.app')
@section ('title', 'View')
@section ('content')



   
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