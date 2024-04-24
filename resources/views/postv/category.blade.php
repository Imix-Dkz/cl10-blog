<x-app-layout>
    <div class="max-w-5xl mx-auto px-2 sm:px-6 lg:px-8 py-8">
        <h1 class="uppercase text-center text-xl font-bold text-gray-400">Categoría: <i>{{$category->name}}</i></h1>
        
        @foreach($postCategory as $postC)
            {{--//Se mueve el código a una view, card-post.blade.php --}}
            <x-card-post :post="$postC"/>
        @endforeach

        <div class="mt-6">{{$postCategory->links()}}</div>
    </div>
</x-app-layout>