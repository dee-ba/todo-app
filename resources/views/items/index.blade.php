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
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                #
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Image
              </th>
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Name
              </th>
             
              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Detail
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                View
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Edit
              </th>

              <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                Delete
              </th>
            </tr>
          </thead>
          <tbody>
          @foreach($items as $item)
            <tr class="border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><input type="checkbox"></td>
              <td><img width= "100px" src="{{ $item->image }}"></td>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              {{$item->name}}
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 break-normal">
              {{$item->detail}}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><a href="{{'view/' .$item['id'] }}">View</a></td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <a href="{{'edit/' .$item['id'] }}">Edit</a>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <a href="{{'delete/' .$item['id'] }}"> Delete </a>
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