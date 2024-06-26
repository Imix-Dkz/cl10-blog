<x-app-layout>
    <div class="container py-8">
        <h1 class="text-4xl font-bold text-gray-200">{{$post->name}}</h1>
        <div class="text-lg text-gray-400 mb-2">{{$post->extract}}</div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
            {{--//Contenido Principal--}}
            <div class="lg:col-span-2 ">
                <figure>
                    <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
                </figure>
                <div class="text-base text-gray-300 mt-4">{{$post->body}}</div>
            </div>
            {{--//Contenido Principal--}}
            <aside>
                <h1 class="text-2xl text-gray-400 mb-1">Más en {{$post->category->name}}</h1>
                <ul>@foreach($pSimilares as $postSimilar)
                    <li class="mb-2">
                        <a class="flex" href="{{route('posts.show', $postSimilar)}}">
                            <img class="w-36 h-20 object-cover object-center" src="{{Storage::url($postSimilar->image->url)}}" alt="">
                            <span class="ml-2 text-gray-300">{{$postSimilar->name}}</span>
                        </a>
                    </li>

                    @endforeach
                </ul>
                
            </aside>
        </div>
    </div>
</x-app-layout>