@extends ('layouts.app')
@section ('title', 'Edit')
@section ('content')
    




<div class="w-full max-w-xs">
            
            <form action="/edit" method="Post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf 
                <input type="hidden" name="id"  value="{{$item['id']}}"> 
                <br><br>

                <div class="mb-4" >		
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Image
                    </label>
                    <input type="text" name= "image" value= "{{ $item['image']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"  type="text">
                </div>


                <div class="mb-6" >		
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                    Name
                    </label>
                    <input type="text" name= "name" value= "{{ $item['name']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6" >		
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Details
                    </label>
                    <input type="text" name= "detail" value= "{{ $item['detail']}}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Update
                    </button>
                
                </div>
            </form>

        </div>


@endsection	