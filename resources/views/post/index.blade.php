<x-app-layout>
    <div class="container py-8">
        <!--Se añade un media query para pantallas medianas:"md" y para pantallas grandes:"lg"-->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($post as $postt)
                <article class="w-full h-80 bg-cover bg-center @if($loop->first) md:col-span-2 lg:col-span-2 @endif" style="background-image: url({{Storage::url($postt->image->url)}}) ">
                    <div class="w-full h-full px-8 flex flex-col justify-center">
                        <div>
                            @foreach($postt->tags as $tag)
                                <a href="" class="inline-block px-3 h-6 bg-{{$tag->color}}-600 text-white rounded-full">{{$tag->name}}</a>
                            @endforeach
                        </div>
                        <h1 class="text-4xl text-white leading-8 font-bold">
                            <a href="">{{$postt->name}}</a>
                        </h1>
                    </div>
                </article>
            @endforeach
        </div>

        <!--//PAGINACIÓN-->
        <div class="mt-4">
            {{$post->links()}}
        </div>
    </div>
</x-app-layout>