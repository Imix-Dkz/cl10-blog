@props(['post'])
{{-- //Para los compomentes:
     se indica recepción de variables, como si fueran arreglos
--}}

<article class="mb-6 bg-gray-950 shadow-lg shadow-gray-00  rounded-lg overflow-hidden">
    <img class="w-full h-72 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">

    <div class="px-6 py-6">
        <h1 class="font-blond text-xl mb-2 text-gray-200">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
        <div class=" text-gray-400 ">
            {{$post->extract}}
        </div>
    </div>

    <div class="px-6 pt-4 pb-2">
        @foreach($post->tags as $tag)
            <a href="{{ route('posts.tag', $tag) }}" class="inline-block bg-gray-800 text-gray-500 px-2 py-1 mr-2 rounded-full text-base">
                {{$tag->name}}
            </a>
        @endforeach
    </div>
</article>