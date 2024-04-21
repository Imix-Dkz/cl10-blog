<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-xl font-bold text-gray-400">Categoría {{$category->name}}</h1>
        
        @foreach($postCategory as $postC)
            <article class="mb-6 bg-gray-950 shadow-lg shadow-gray-00  rounded-lg overflow-hidden">
                <img class="w-full h-72 object-cover object-center" src="{{Storage::url($postC->image->url)}}" alt="">

                <div class="px-6 py-6">
                    <h1 class="font-blond text-xl mb-2 text-gray-200">
                        <a href="{{route('posts.show', $postC)}}">{{$postC->name}}</a>
                    </h1>
                    <div class=" text-gray-400 ">
                        {{$postC->extract}}
                    </div>
                </div>

                <div class="px-6 pt-4 pb-2">
                    @foreach($postC->tags as $tag)
                        <a href="" class="inline-block bg-gray-800 text-gray-500 px-2 py-1 mr-2 rounded-full text-base">
                            {{$tag->name}}
                        </a>
                    @endforeach
                </div>
            </article>
        @endforeach

        <div class="mt-6">{{$postCategory->links()}}</div>
    </div>
</x-app-layout>