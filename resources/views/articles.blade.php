<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @foreach ($articles as $article)
                <div class="p-6 mt-8 bg-white border-b border-indigo-400 ">
                    <p class="bg-indigo-50"> {{ $article->title }}</p>
                    <p class="bg-pink-50"> {{ $article->description }}</p>
                </div>
{{--                <a href="{{route('dashboard/articles')}}"></a>--}}
            @endforeach
        </div>
    </div>
</x-app-layout>

