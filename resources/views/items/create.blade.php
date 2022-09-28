@extends ('layouts.app')
@section ('title', 'Create')
@section ('content')


    <div class="mt-20 ml-15 mb-10" >		
                    <a href="/index" class="bg-red-400 text-white hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">List of Items</a>
    </div>

<div class="w-full max-w-xs">
<div class="flex items-center justify-between">
                  
                </div>
                
            <form action="/items" method="Post" enctype="multipart/form-data" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf 
              

                <div class="text-2xl text-green-500 mb-6 font-bold" >	
                <p>Create a New Item</p>
                </div>

                <div class="mb-6" >	
                    
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Image
                    </label>

                    <input type="text" name= "image" placeholder="image url here" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                </div>


                <div class="mb-6" >		
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                    Name
                    </label>
                    <input type="text" name= "name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="mb-6" >		
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        Details
                    </label>
                    <input type="text" name= "detail" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                </div>

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Submit
                    </button>
                
                </div>
            </form>



        </div>


        

@endsection	