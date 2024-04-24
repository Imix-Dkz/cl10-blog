<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-xl font-bold text-gray-400">Etiqueta: <i>{{$tag->name}}</i></h1>
        
        @foreach($postsTag as $postT)
            {{--//Se mueve el código a una view, card-post.blade.php --}}
            <x-card-post :post="$postT"/>
        @endforeach

        <div class="mt-6">{{$postsTag->links()}}</div>
    </div>
</x-app-layout>