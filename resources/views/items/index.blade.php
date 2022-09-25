@extends ('layouts.app')
@section ('title', 'Index')
@section ('content')

<div class="mb-6 font-bold" >	
                <p>List of Items </p>
                </div>

<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full">
          <thead class="border-b">
            <tr>
              <th scope="col" class="text-sm font-medium text-gray-900 px-3 py-2 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-3 py-2 text-left">
                Image
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-3 py-2 text-left">
                Name
              </th>
             
              <th scope="col" class="text-sm font-medium text-gray-900 px-3 py-2 text-left">
                Detail
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-3 py-2 text-left">
                Action
              </th>

            </tr>
          </thead>
          <tbody>
          @foreach($items as $item)
            <tr class="border-b">
              <td class="px-3 py-2 whitespace-nowrap text-sm font-medium text-gray-900"><input type="checkbox"></td>
              <td><img width= "100px" src="{{ $item->image }}"></td>
              </td>
              <td class="px-3 py-2 text-sm text-gray-900 font-light  whitespace-wrap">
              {{$item->name}}
              </td>
              <td class="px-3 py-2 text-sm text-gray-900 font-light whitespace-wrap">
              {{$item->detail}}
              </td>

              <td>
              <div class="flex items-center justify-between">
                    <button class="h-8 px-4 text-sm 
                    bg-blue-500 hover:bg-cyan-500 text-white font-bold rounded focus:outline-none focus:shadow-outline" type="submit">
                    <a href="{{'view/' .$item['id'] }}">View</a>
                    </button>
                
                </div>
                </td>


                <td>
              <div class="flex items-center justify-between">
                    <button class="h-8 px-4 text-sm bg-green-500 hover:bg-cyan-500 text-white font-bold rounded focus:outline-none focus:shadow-outline" type="submit">
                    <a href="{{'edit/' .$item['id'] }}">Edit</a>
                    </button>
                
                </div>
                </td>


                <td>
              <div class="flex items-center justify-between">
                    <button class="h-8 px-4 text-sm bg-red-500 hover:bg-cyan-500 text-white font-bold rounded focus:outline-none focus:shadow-outline" type="submit">
                    <a href="{{'delete/' .$item['id'] }}">Delete</a>
                    </button>
                
                </div>
                </td>

            </tr>
          </tbody>

          @endforeach
        </table>
      </div>
    </div>
  </div>
</div>






@endsection	