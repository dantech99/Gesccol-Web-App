<div>
    {{-- seccion de categorias  --}}
    <section class="container m-auto text-center">
        <h1 class=" text-2xl font-bold text-[#2299AA] m-auto text-center">Categorias</h1>
        <div class="flex flex-row flex-wrap justify-center w-auto">
            @foreach ($categorias as $category)
        <a href="{{route('posts.categoria', $category)}}" class="p-4  block  w-35 mx-2 my-2 rounded-md bg-gray-200 text-center hover:bg-gray-300">{{$category->name}}</a>
        @endforeach
        </div>
    </section>

</div>