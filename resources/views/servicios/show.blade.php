@extends('layouts.template')

@section('title', 'Tramite | ' . $service->title)
    
@section('content')

<section class="container m-auto mt-20">
    <header class=" px-20">
        <h1 class="text-4xl font-semibold mt-5 text-center">{{$service->title}}</h1>
        <p class=" text-xl my-5 ">{{$service->description}}</p>
    </header>
    <div class="timeline mt-10 px-20">
        <ol class="border-l-2 border-blue-600">
            <li>
              <div class="flex flex-start items-center">
                <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2"></div>
                <h4 class="text-gray-800 font-semibold text-xl -mt-2">Title of section 1</h4>
              </div>
              <div class="ml-6 mb-6 pb-6">
    
                <p class="text-gray-700 mt-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          
              </div>
            </li>
            <li>
              <div class="flex flex-start items-center">
                <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2"></div>
                <h4 class="text-gray-800 font-semibold text-xl -mt-2">Title of section 2</h4>
              </div>
              <div class="ml-6 mb-6 pb-6">
              
                <p class="text-gray-700 mt-2 mb-4">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
              
              </div>
            </li>
            <li>
              <div class="flex flex-start items-center">
                <div class="bg-blue-600 w-4 h-4 flex items-center justify-center rounded-full -ml-2 mr-3 -mt-2"></div>
                <h4 class="text-gray-800 font-semibold text-xl -mt-2">Title of section 3</h4>
              </div>
              <div class="ml-6 mb-6 pb-6">
              
                <p class="text-gray-700 mt-2 mb-4">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
              
              </div>
            </li>
          </ol>
    </div>
</section>

@endsection